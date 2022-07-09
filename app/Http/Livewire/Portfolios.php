<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Portfolios extends Component
{
    use WithPagination;
    protected $listeners = ['set-skills' => 'setSkills'];
    public $categories = [];
    public $search;
    public $all_skills;
    public $all_categories;
    public $skills = [];

    public function __construct()
    {
        $this->all_skills = Skill::all();
        $this->all_categories = Category::all();
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

        $query = Portfolio::select('portfolios.*')
            ->join('users', 'portfolios.user_id', 'users.id')
            ->where(function ($query) use ($search_value) {
                $query->where('title', 'LIKE', $search_value)
                    ->orWhere(DB::raw('CONCAT(users.first_name, " ",users.last_name)'), 'LIKE', $search_value);
            })
            ->when($this->categories != [], function ($query) {
                $query->whereIn('portfolios.category_id', $this->categories);
            })
            ->when($this->skills != [], function ($query) {
                $query->join('portfolio_skills', 'portfolios.id', 'portfolio_skills.portfolio_id')
                    ->whereIn('portfolio_skills.skill_id', $this->skills);
            })
            ->distinct();

        $portfolios = $query->orderBy('id', 'DESC')->paginate(21);

        return view('livewire.portfolio', ['portfolios' => $portfolios]);
    }
}
