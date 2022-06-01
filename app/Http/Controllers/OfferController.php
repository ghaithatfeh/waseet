<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function create(Request $request)
    {
        // return$request->file('files')[0]->getClientOriginalName();
        $request->validate([
            'deadline' =>  'required|numeric|min:1',
            'price' => 'required|numeric|min:1',
            'description' => 'required',
            'project_id' => 'required|numeric',
        ]);
        $request['user_id'] = auth()->id();
        $offer = Offer::create($request->all());

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $file_name = time() . '_' . $file->getClientOriginalName();
                if ($file->move(public_path('uploaded_images/offers'), $file_name))
                    Attachment::create(['offer_id' => $offer->id, 'file_name' => $file_name]);
            }
        }
        return back();
    }
}
