<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class FreelancerController extends Controller
{
    public function show(User $freelancer)
    {
        return view('freelancers.view', [
            'user' => $freelancer
        ]);
    }

    public function editBio(Request $request, User $user)
    {
        if ($user->id == auth()->id())
            $user->update($request->all());
        return redirect()->back();
    }
}
