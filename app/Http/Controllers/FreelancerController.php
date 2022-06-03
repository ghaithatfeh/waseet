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
        if ($user->id != auth()->id())
            return abort(403);
        $user->update($request->all());
        return redirect()->back();
    }

    public function personalData(User $user)
    {
        if ($user->id != auth()->id())
            return abort(403);
        return view('freelancers.personal-data', ['user' => $user]);
    }
}
