<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    public function create(Request $request)
    {
        $users_offers = DB::table('offers')
            ->select('user_id')
            ->where('project_id', '=', $request->project_id)
            ->get()
            ->pluck('user_id')
            ->toArray();

        if (in_array(auth()->id(), $users_offers))
            return abort(403);

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
