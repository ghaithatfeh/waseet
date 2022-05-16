<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('services.index');
    }
    public function create()
    {
        return view('services.create', [
            'skills' => Skill::all()
        ]);
    }
}
