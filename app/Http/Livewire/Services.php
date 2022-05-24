<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;
    public $categories = [];
    public $search;

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
        if ($this->categories == [])
            $services = Service::where('title', 'LIKE', $search_value)->paginate(2);
        else
            $services = Service::whereIn('category_id', $this->categories)
            ->where('title', 'LIKE', $search_value)
            ->paginate(2);

        return view('livewire.services', ['services' => $services]);
    }
}
