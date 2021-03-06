<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;
    protected $listeners = ['set-skills' => 'setSkills', 'set-budget' => 'setBudget'];
    public $categories = [];
    public $search;
    public $all_skills;
    public $skills = [];
    public $budget;

    public function setSkills($data)
    {
        $this->skills = $data;
        $this->resetPage();
    }

    public function setBudget($data)
    {
        $this->budget = explode(';', $data);
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->all_skills = Skill::all();
    }

    public function render()
    {
        $search_value = '%' . $this->search . '%';

        $query = Project::select('projects.*')
            ->join('users', 'projects.user_id', 'users.id')
            ->where(function ($query) use ($search_value) {
                $query->where('title', 'LIKE', $search_value)
                    ->orWhere(DB::raw('CONCAT(users.first_name, " ",users.last_name)'), 'LIKE', $search_value);
            })
            ->when($this->categories != [], function ($query) {
                $query->whereIn('projects.category_id', $this->categories);
            })
            ->when($this->skills != [], function ($query) {
                $query->join('project_skills', 'projects.id', 'project_skills.project_id')
                    ->whereIn('project_skills.skill_id', $this->skills);
            })
            ->when($this->budget != [], function ($query) {
                $query->join('budgets', 'budgets.id', 'projects.budget_id')
                    ->where(function ($query) {
                        $query->whereBetween('budgets.to', $this->budget)
                            ->orWhere('budgets.from', $this->budget[0]);
                    });
            })
            ->distinct();

        $projects = $query->orderBy('id', 'DESC')->paginate(20);
        return view('livewire.projects', ['projects' => $projects]);
    }
}
