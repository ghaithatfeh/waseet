<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Project;
use App\Models\Attachment;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use App\Models\PortfolioSkill;
use App\Models\ProjectSkill;
use App\Models\Skill;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', [
            'only' => [
                'store',
                'create',
                'edit',
                'update',
                'destroy'
            ]
        ]);
    }
    public function create()
    {
        return view('portfolios.create', [
            'skills' => Skill::all(),
        ]);
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', [
            'portfolio' => $portfolio,
            'skills' => Skill::all(),
            'categories' => Category::all()
        ]);
    }

    public function show(Portfolio $portfolio)
    {
        if (!str_contains(url()->previous(), '/edit'))
            Redirect::setIntendedUrl(url()->previous());

        return view('portfolios.view', ['portfolio' => $portfolio]);
    }

    public function destroy(Portfolio $portfolio)
    {
        if (auth()->id() != $portfolio->user_id)
            return abort(403);

        foreach ($portfolio->images as $image)
            File::delete('uploaded_images/portfolios/' . $image->image_name);

        File::delete('uploaded_images/portfolios/' . $portfolio->main_image);
        $portfolio->delete();
        return redirect()->intended();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required|min:10',
            'category_id' => 'required|numeric',
            'main_image' => 'required|image',
            'images.*' => 'image',
            'skills.*' => 'numeric',
            'url' => 'url|nullable',
        ]);

        $portfolio = new Portfolio();
        $portfolio->user_id = auth()->id();
        $portfolio->title = $request->title;
        $portfolio->url = $request->url;
        $portfolio->description = $request->description;
        $portfolio->category_id = $request->category_id;

        $file = $request->main_image;
        $file_name = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploaded_images/portfolios'), $file_name);
        $portfolio->main_image = $file_name;

        $portfolio->save();

        if ($request->has('skills'))
            foreach ($request->skills as $skill) {
                PortfolioSkill::create([
                    'portfolio_id' => $portfolio->id,
                    'skill_id' => $skill
                ]);
            }

        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $file_name = time() . '_' . $file->getClientOriginalName();
                if ($file->move(public_path('uploaded_images/portfolios'), $file_name))
                    PortfolioImage::create(['portfolio_id' => $portfolio->id, 'image_name' => $file_name]);
            }
        }
        return view('portfolios.view', ['portfolio' => $portfolio]);
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        if (auth()->id() != $portfolio->user_id)
            return abort(403);

        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required|min:10',
            'category_id' => 'required|numeric',
            'main_image_input' => 'image',
            'images.*' => 'image',
            'skills.*' => 'numeric',
            'url' => 'url|nullable',
        ]);
        if ($request->hasFile('main_image_input')) {
            $file = $request->file('main_image_input');
            $file_name = time() . '_' . $file->getClientOriginalName();
            if ($file->move(public_path('uploaded_images/portfolios'), $file_name)){
                $request['main_image'] = $file_name;
                File::delete('uploaded_images/portfolios/' . $portfolio->main_image);
            }
        }
        $portfolio->update($request->all());

        portfolioSkill::where('portfolio_id', $portfolio->id)->delete();
        if ($request->skills) {
            foreach ($request->skills as $skill)
                $skills[] = ['skill_id' => $skill, 'portfolio_id' => $portfolio->id];
            portfolioSkill::insert($skills);
        }
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $file_name = time() . '_' . $file->getClientOriginalName();
                if ($file->move(public_path('uploaded_images/portfolios'), $file_name))
                    portfolioImage::create(['portfolio_id' => $portfolio->id, 'image_name' => $file_name]);
            }
        }
        return view('portfolios.view', ['portfolio' => $portfolio]);
    }

    public function deleteImage(PortfolioImage $image)
    {
        if (auth()->id() != $image->portfolio->user_id)
            return abort(403);

        File::delete('uploaded_images/portfolios/' . $image->image_name);
        $image->delete();
        return true;
    }
}
