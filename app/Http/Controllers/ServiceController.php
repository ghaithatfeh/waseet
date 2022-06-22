<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\ServiceSkill;
use App\Models\Skill;
use Illuminate\Http\Request;
use Livewire\Livewire;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index');
    }
    public function create()
    {
        return view('services.create', [
            'skills' => Skill::all()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'images.*' => 'image|required',
            'deadline' => 'required',
            'price' => 'required'
        ]);
        $request['user_id'] = auth()->id();
        $service = Service::create($request->all());

        if ($request->skills) {

            foreach ($request->skills as $skill)
                $skills[] = ['skill_id' => $skill, 'service_id' => $service->id];
            ServiceSkill::insert($skills);
        }
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $file_name = time() . '_' . $file->getClientOriginalName();
                if ($file->move(public_path('uploaded_images/services'), $file_name))
                    ServiceImage::create(['service_id' => $service->id, 'image_name' => $file_name]);
            }
        }
        return redirect('services');
    }

    public function show(Service $service)
    {
        return view('services.view', ['service' => $service]);
    }

    public function destroy(Service $service)
    {
        if (auth()->id() != $service->user_id)
            return abort(403);

        $service->delete();
        return redirect('/services');
    }
}
