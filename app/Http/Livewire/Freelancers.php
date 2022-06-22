<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Freelancers extends Component
{
    use WithPagination;
    protected $listeners = ['set-skills' => 'setSkills'];
    public $categories = [];
    public $online;
    public $search;
    public $all_skills;
    public $skills = [];

    public function __construct()
    {
        $this->all_skills = Skill::all();
    }

    public function setSkills($data)
    {
        $this->skills = $data;
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search_value = '%' . $this->search . '%';

        $query = User::select('users.*')
            ->where(function ($query) use ($search_value) {
                $query->where(DB::raw('CONCAT(first_name, " ",last_name)'), 'LIKE', $search_value)
                    ->orwhere('email', 'LIKE', $search_value);
            })
            ->when($this->categories != [], function ($query) {
                $query->whereIn('category_id', $this->categories);
            })
            ->when($this->online != [], function ($query) {
                $query->whereNull('last_login');
            })
            ->when($this->skills != [], function ($query) {
                $query->join('user_skills', 'users.id', 'user_skills.user_id')
                    ->whereIn('user_skills.skill_id', $this->skills);
            });

        $users = $query->paginate(21);
        return view('livewire.freelancers', ['users' => $users]);
    }
}
