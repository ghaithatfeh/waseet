<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\UserSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'phone' => 'nullable|min:10',
            'category_id' => 'numeric',
            'country_id' => 'numeric',
            'image' => 'image'
        ]);
        if ($request->year && $request->month && $request->day)
            $request['birthdate'] = $request->year . '-' . $request->month . '-' . $request->day;

        if ($request->has('skills')) {
            DB::table('user_skills')->where('user_id', $user->id)->delete();
            foreach ($request->skills as $skill)
                $data[] = ['user_id' => $user->id, 'skill_id' => $skill];
            UserSkill::insert($data);
        }

        if ($request->hasFile('image')) {
            if ($user->profile_image != null) {
                unlink('uploaded_images/users/' . $user->profile_image);
            }
            $file = $request
                ->file('image')
                ->store('users', ['disk' => 'public_uploade']);
            $request['profile_image'] = substr($file, 6);
        }
        $user->update($request->all());
        return back()->with('message-success', 'تم تحديث البيانات بنجاح');
    }
}
