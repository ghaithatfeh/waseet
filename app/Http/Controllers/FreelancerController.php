<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();
        return view('freelancers.personal-data', [
            'user' => $user,
            'categories' => $categories
        ]);
    }

    public function personalDataUpdate(Request $request, User $user)
    {
        if ($user->id != auth()->id())
            return abort(403);

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|min:10',
            'category_id' => 'required|numeric',
            'job_name' => 'required',
        ]);
        $request['birthdate'] = $request->year . '-' . $request->month . '-' . $request->day;

        $user->update($request->all());
        return back()->with('message-success', 'تم تحديث البيانات بنجاح');
    }
}
