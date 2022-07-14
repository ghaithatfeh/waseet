<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\ServiceSkill;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    public function index()
    {
        $design_services = Service::withCount('likes')
            ->with('category', 'images')
            ->where('category_id', 3)
            ->orderByDesc('likes_count')
            ->take(8)
            ->get();
        $programming_services = Service::withCount('likes')
            ->with('category', 'images')
            ->where('category_id', 2)
            ->orderByDesc('likes_count')
            ->take(8)
            ->get();
        $voice_services = Service::withCount('likes')
            ->with('category', 'images')
            ->where('category_id', 1)
            ->orderByDesc('likes_count')
            ->take(8)
            ->get();
        $writing_services = Service::withCount('likes')
            ->where('category_id', 5)
            ->orderByDesc('likes_count')
            ->take(8)
            ->get();
        $marketing_services = Service::withCount('likes')
            ->where('category_id', 4)
            ->orderByDesc('likes_count')
            ->take(8)
            ->get();

        return view(
            'services.index',
            compact(
                'design_services',
                'programming_services',
                'voice_services',
                'writing_services',
                'marketing_services',
            )
        );
    }
    public function create()
    {
        return view('services.create', [
            'skills' => Skill::all(),
            'categories' => Category::all()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'images' => 'required',
            'images.*' => 'image',
            'deadline' => 'required',
            'price' => 'required',
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
        return view('services.view', ['service' => $service]);
    }

    public function show(Service $service)
    {
        if (!str_contains(url()->previous(), '/edit'))
            Redirect::setIntendedUrl(url()->previous());
        return view('services.view', ['service' => $service]);
    }

    public function edit(Service $service)
    {
        if (auth()->id() != $service->user_id)
            return abort(403);

        return view('services.edit', [
            'skills' => Skill::all(),
            'categories' => Category::all(),
            'service' => $service
        ]);
    }

    public function update(Request $request, Service $service)
    {
        if (auth()->id() != $service->user_id)
            return abort(403);

        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'images' => Rule::requiredIf(function () use ($service) {
                return $service->images->count() == 0;
            }),
            'images.*' => 'image',
            'deadline' => 'required',
            'price' => 'required',
        ]);
        $service->update($request->all());

        ServiceSkill::where('service_id', $service->id)->delete();
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
        return view('services.view', ['service' => $service]);
    }

    public function destroy(Service $service)
    {
        if (auth()->id() != $service->user_id)
            return abort(403);

        if ($service->images()->count() > 0)
            foreach ($service->images as $image)
                File::delete('uploaded_images/services/' . $image->image_name);

        $service->delete();
        return redirect()->intended();
    }

    public function deleteImage(ServiceImage $image)
    {
        if (auth()->id() != $image->service->user_id)
            return abort(403);

        File::delete('uploaded_images/services/' . $image->image_name);
        $image->delete();
        return true;
    }
}
