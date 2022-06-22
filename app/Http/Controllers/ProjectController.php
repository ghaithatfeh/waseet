<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Project;
use App\Models\Attachment;
use App\Models\ProjectSkill;
use App\Models\Skill;
use Illuminate\Http\Request;

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
        $project = new Project();
        $project->user_id = auth()->id();
        $project->status = 'published';
        $project->title = $request->title;
        $project->description = $request->description;
        $project->budget_id = $request->project_budget;
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
        return view('projects.view', ['project' => $project]);
    }

    public function edit(Project $project)
    {
        //
    }

    public function update(Request $request, Project $project)
    {
        //
    }

    public function destroy(Project $project)
    {
        if (auth()->id() != $project->user_id)
            return abort(403);
            
        $project->delete();
        return redirect('/projects');
    }
}
