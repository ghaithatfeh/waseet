<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Freelancers extends Component
{
    use WithPagination;
    public $categories = [];
    public $online;
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search_value = '%' . $this->search . '%';

        $query = User::where(function ($query) use ($search_value) {
            $query->where(DB::raw('CONCAT(first_name, " ",last_name)'), 'LIKE', $search_value)
                ->orwhere('email', 'LIKE', $search_value);
        });
        if ($this->categories != [])
            $query->whereIn('category_id', $this->categories);
        if ($this->online)
            $query->whereNull('last_login');

        $users = $query->paginate(21);

        return view('livewire.freelancers', ['users' => $users]);
    }
}
