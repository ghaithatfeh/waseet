<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;
    public $categories = [];
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search_value = '%' . $this->search . '%';
        if ($this->categories == [])
            $projects = Project::where('title', 'LIKE', $search_value)
                ->paginate(2);
        else
            $projects = Project::select('projects.*')
                ->join('users', 'projects.user_id', 'users.id')
                ->whereIn('category_id', $this->categories)
                ->where('title', 'LIKE', $search_value)
                ->paginate(2);

        return view('livewire.projects', ['projects' => $projects]);
    }
}
