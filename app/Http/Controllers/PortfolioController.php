<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Project;
use App\Models\Attachment;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use App\Models\PortfolioSkill;
use App\Models\ProjectSkill;
use App\Models\Skill;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

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

    public function show(Portfolio $portfolio)
    {
        if (!str_contains(url()->previous(), '/edit'))
            Redirect::setIntendedUrl(url()->previous());
        return view('portfolios.view', ['portfolio' => $portfolio]);
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
}
