<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Skill;
use App\Models\User;
use App\Models\UserSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class FreelancerController extends Controller
{
    public function show($freelancer_id)
    {
        $user = User::where('id', $freelancer_id)
            ->with('projects.budget')
            ->withCount('portfolios', 'projects', 'services', 'likes')
            ->first();
        $user_score = [
            'profile' => $user->filled(),
            'portfolios' => $user->portfolios_count < 5 ? $user->portfolios_count * 2 : 10,
            'services' => $user->services_count < 10 ? $user->services_count : 10,
            'projects' => $user->projects_count < 10 ? $user->projects_count : 10,
            'likes' => $user->likes_count < 10 ? $user->likes_count : 10,
        ];
        $user_avg_score = array_sum($user_score) / 5;
        return view('freelancers.view', [
            'user' => $user,
            'user_score' => $user_score,
            'user_avg_score' => $user_avg_score
        ]);
    }

    public function editBio(Request $request, User $user)
    {
        if ($user->id != auth()->id())
            return abort(403);
        $user->update($request->all());
        return redirect()->back();
    }

    public function personalData()
    {
        $user = User::where('id', auth()->id())
            ->with(['projects', 'projects.budget', 'skills', 'country', 'category', 'services', 'services.category', 'services.images', 'portfolios'])
            ->first();

        return view('freelancers.personal-data', [
            'user' => $user,
            'categories' => Category::all(),
            'skills' => Skill::all()
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
        return back()->with('message-success', '???? ?????????? ???????????????? ??????????');
    }

    public function changePassword(Request $request)
    {
        $user = User::find(auth()->id());
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:3|different:old_password'
        ]);
        if (Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password)
            ]);
            return redirect('/my/profile')->with('message-success', '???? ?????????? ???????? ???????????? ??????????.');
        } else {
            throw ValidationException::withMessages(['old_password' => '???????? ???????????? ?????? ??????????.']);
        }
    }
}
