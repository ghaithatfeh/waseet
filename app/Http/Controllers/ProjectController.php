<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Project;
use App\Models\Attachment;
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
                'create'
            ]
        ]);
    }
    public function create()
    {
        if (!isset($_GET['project_id']))
            return view('projects.create', [
                'skills' => Skill::all(),
                'budgets' => Budget::all()
            ]);
        else
            return view('projects.create', [
                'skills' => Skill::all(),
                'budgets' => Budget::all(),
                'project' => Project::find($_GET['project_id'])
            ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required|min:100',
            'budget_id' => 'required|numeric',
            'expected_deadline' => 'required|numeric'
        ]);
        $project = new Project();
        $project->user_id = auth()->id();
        $project->status = 'published';
        $project->title = $request->title;
        $project->description = $request->description;
        $project->budget_id = $request->budget_id;
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
        return redirect('/projects');
    }

    public function show(Project $project)
    {
        Redirect::setIntendedUrl(url()->previous());
        return view('projects.view', ['project' => $project]);
    }

    public function edit(Project $project)
    {
        $skills = Skill::all();
        $budgets = Budget::all();
        return view('projects.edit', compact('project', 'skills', 'budgets'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required|min:100',
            'budget_id' => 'required|numeric',
            'expected_deadline' => 'required|numeric'
        ]);
        $project->update($request->all());

        ProjectSkill::where('project_id', $project->id)->delete();
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

    public function destroy(Project $project)
    {
        if (auth()->id() != $project->user_id)
            return abort(403);

        if ($project->attachments->count() > 0)
            foreach ($project->attachments as $attachment)
                File::delete('uploaded_images/projects/' . $attachment->file_name);

        $project->delete();
        return redirect()->intended();
    }
}
