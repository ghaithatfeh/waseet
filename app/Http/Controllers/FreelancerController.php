<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('freelancers.index', [
            'users' => $users
        ]);
    }

    public function show(User $freelancer)
    {
        return view('freelancers.view', [
            'user' => $freelancer
        ]);
    }

    public function editBio(Request $request, User $user)
    {
        // return $request;
        if ($user->id == auth()->id())
            $user->update($request->all());
        return redirect()->back();
    }
}
