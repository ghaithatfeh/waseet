<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Project;
use App\Models\ProjectSkill;
use App\Models\Skill;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function create()
    {
        if(!auth()->check())
            return redirect('login');
        return view('projects.create', [
            'skills' => Skill::all(),
            'budgets' => Budget::all()
        ]);
    }

    public function store(Request $request)
    {
        if(!auth()->check())
            return redirect('login');
        $project = new Project();
        $project->user_id = auth()->id();
        $project->status = 'published';
        $project->title = $request->title;
        $project->description = $request->description;
        $project->budget_id = $request->project_budget;
        $project->expected_deadline = $request->expected_deadline;
        $project->save();
        foreach ($request->project_tags as $skill) {
            ProjectSkill::create([
                'project_id' => $project->id,
                'skill_id' => $skill
            ]);
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
        //
    }
}
