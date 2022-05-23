<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;

class Services extends Component
{
    public $categories = [];

    public function render()
    {
        $services = Service::whereIn('category_id', $this->categories)->get();
        return view('livewire.services', ['services' => $services]);
    }
}
