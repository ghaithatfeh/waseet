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
    public $categories = [];
    public $search;
    public $all_skills;
    public $skills = [];

    public function __construct()
    {
        $this->all_skills = Skill::all();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search_value = '%' . $this->search . '%';

        $query = Project::select('projects.*')->join('users', 'projects.user_id', 'users.id')
            ->where(function ($query) use ($search_value) {
                $query->where('title', 'LIKE', $search_value)
                    ->orWhere(DB::raw('CONCAT(users.first_name, " ",users.last_name)'), 'LIKE', $search_value);
            });
        if ($this->categories != [])
            $query->whereIn('users.category_id', $this->categories);

        $projects = $query->paginate(20);

        return view('livewire.projects', ['projects' => $projects]);
    }
}
