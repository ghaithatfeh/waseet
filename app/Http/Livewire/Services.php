<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Skill;
use Livewire\WithPagination;

class Services extends Component
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
        if (request()->has('specialize'))
            $this->categories[] = request('specialize');
        if (request()->has('search'))
            $this->search = request('search');
    }

    public function render()
    {
        $search_value = '%' . $this->search . '%';

        $query = Service::with('images', 'category')->withCount('likes')
            ->where('title', 'LIKE', $search_value)
            ->when($this->categories != [], function ($query) {
                $query->whereIn('category_id', $this->categories);
            })
            ->when($this->skills != [], function ($query) {
                $query->join('service_skills', 'services.id', 'service_skills.service_id')
                    ->whereIn('service_skills.skill_id', $this->skills);
            })
            ->when($this->budget != [], function ($query) {
                $query->whereBetween('price', $this->budget);
            })
            ->distinct();

        $services = $query->orderBy('id', 'DESC')->paginate(21);
        return view('livewire.services', ['services' => $services]);
    }
}
