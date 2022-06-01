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
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search_value = '%' . $this->search . '%';
        if ($this->categories == [])
            $users = User::where(DB::raw('CONCAT(first_name, " ",last_name)'), 'LIKE', $search_value)
                ->paginate(2);
        else
            $users = User::whereIn('category_id', $this->categories)
                ->where(DB::raw('CONCAT(first_name, " ",last_name)'), 'LIKE', $search_value)
                ->paginate(2);

        return view('livewire.freelancers', ['users' => $users]);
    }
}
