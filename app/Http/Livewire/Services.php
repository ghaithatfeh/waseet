<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Skill;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;
    protected $listeners = ['set-skills' => 'setSkills'];
    public $categories = [];
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
        // $this->resetPage();
    }

    public function mount($category)
    {
        $this->categories[] = $category;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search_value = '%' . $this->search . '%';

        $query = Service::select(['services.*', 'service_images.*'])
            ->join('service_images', 'service_images.service_id', 'services.id')
            ->where('title', 'LIKE', $search_value);

        if ($this->categories != [])
            $query->whereIn('category_id', $this->categories);

        if ($this->skills != [])
            $query->join('service_skills', 'services.id', 'service_skills.service_id')
                ->whereIn('service_skills.skill_id', $this->skills);

        $services = $query->paginate(21);

        return view('livewire.services', ['services' => $services]);
    }
}
