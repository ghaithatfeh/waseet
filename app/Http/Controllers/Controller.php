<?php

namespace App\Http\Controllers;

use App\Models\Likeable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addLike(Request $request)
    {
        $model = Likeable::where([
            'user_id' => auth()->id(),
            'likeable_id' => $request->model_id,
            'likeable_type' => $request->model_type
        ])->first();
        if ($model ?? false)
            $model->delete();
        else
            Likeable::create([
                'user_id' => auth()->id(),
                'likeable_id' => $request->model_id,
                'likeable_type' => $request->model_type
            ]);
    }
}
