<?php

namespace App\Http\Services;

use App\Models\Review;
use Illuminate\Support\Facades\Validator;

class FrontendServices
{
    public function index()
    {
        $reviews = Review::all();
        return view('frontend.home', compact('reviews'));
    }

    public function contactUs($request){
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'

        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        
        return view('frontend.contact_us');
    }

}
