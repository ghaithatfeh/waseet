<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Project;
use App\Models\Attachment;
use App\Models\Category;
use App\Models\Likeable;
use App\Models\ProjectSkill;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => [
                'store',
                'create',
                'edit',
                'update',
                'destroy'
            ]
        ]);
    }
    public function create()
    {
        if (!isset($_GET['project_id']))
            return view('projects.create', [
                'skills' => Skill::all(),
                'budgets' => Budget::all(),
                'categories' => Category::all()
            ]);
        else
            return view('projects.create', [
                'skills' => Skill::all(),
                'budgets' => Budget::all(),
                'categories' => Category::all(),
                'project' => Project::find($_GET['project_id'])
            ]);
    }

    public function show(Project $project)
    {
        if (!str_contains(url()->previous(), '/edit'))
            Redirect::setIntendedUrl(url()->previous());
        return view('projects.view', ['project' => $project]);
    }

    public function edit(Project $project)
    {
        if (auth()->id() != $project->user_id)
            return abort(403);

        $skills = Skill::all();
        $budgets = Budget::all();
        $categories = Category::all();
        return view('projects.edit', compact('project', 'skills', 'budgets', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required|min:100',
            'budget_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'expected_deadline' => 'required|numeric',
            'files.*' => 'max:10240|mimes:3gp,7z,7zip,ai,apk,avi,bin,bmp,bz2,css,csv,doc,docx,egg,flv,gif,gz,h264,htm,html,ia,icns,ico,jpeg,jpg,m4v,markdown,md,mdb,mkv,mov,mp3,mp4,mpa,mpeg,mpg,mpga,octet-stream,odp,ods,odt,ogg,otf,pak,pdf,pea,png,pps,ppt,pptx,psd,rar,rm,rss,rtf,s7z,sql,svg,tar,tar,gz,tbz2,tex,tgz,tif,tiff,tlz,ttf,vob,wav,webm,wma,wmv,xhtml,xlr,xls,xlsx,xml,z,zip,zipx,qt'
        ]);
        $project = new Project();
        $project->user_id = auth()->id();
        $project->status = 'published';
        $project->title = $request->title;
        $project->description = $request->description;
        $project->budget_id = $request->budget_id;
        $project->category_id = $request->category_id;
        $project->expected_deadline = $request->expected_deadline;
        $project->save();
        if ($request->has('project_tags'))
            foreach ($request->project_tags as $skill) {
                ProjectSkill::create([
                    'project_id' => $project->id,
                    'skill_id' => $skill
                ]);
            }

        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach ($files as $file) {
                $file_name = time() . '_' . $file->getClientOriginalName();
                if ($file->move(public_path('uploaded_images/projects'), $file_name))
                    Attachment::create(['project_id' => $project->id, 'file_name' => $file_name]);
            }
        }
        return view('projects.view', ['project' => $project]);
    }

    public function update(Request $request, Project $project)
    {
        if (auth()->id() != $project->user_id)
            return abort(403);

        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required|min:100',
            'budget_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'expected_deadline' => 'required|numeric'
        ]);
        $project->update($request->all());

        ProjectSkill::where('project_id', $project->id)->delete();
        if ($request->has('project_tags')) {
            foreach ($request->project_tags as $skill)
                $skills[] = ['skill_id' => $skill, 'project_id' => $project->id];
            ProjectSkill::insert($skills);
        }

        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach ($files as $file) {
                $file_name = time() . '_' . $file->getClientOriginalName();
                if ($file->move(public_path('uploaded_images/projects'), $file_name))
                    Attachment::create(['project_id' => $project->id, 'file_name' => $file_name]);
            }
        }

        return view('projects.view', ['project' => $project]);
    }

    public function destroy(Project $project)
    {
        if (auth()->id() != $project->user_id)
            return abort(403);

        foreach ($project->attachments as $attachment)
            File::delete('uploaded_images/projects/' . $attachment->file_name);

        foreach ($project->offers as $offers)
            foreach ($offers->attachments as $attachment)
                File::delete('uploaded_images/offers/' . $attachment->file_name);

        $project->delete();
        return redirect()->intended();
    }

    public function deleteImage(Attachment $file)
    {
        if (auth()->id() != $file->project->user_id)
            return abort(403);

        File::delete('uploaded_images/projects/' . $file->file_name);
        $file->delete();
        return true;
    }
}
