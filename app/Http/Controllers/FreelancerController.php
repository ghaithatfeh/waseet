<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function index(){
        $users = User::all();
        return view('freelancers.index',[
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        return view('freelancers.view', [
            'user' => $user
        ]);
    }
}
