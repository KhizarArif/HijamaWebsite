<?php

namespace App\Http\Services;

use App\Models\Review;

class FrontendServices
{
    public function index()
    {
        $reviews = Review::all();
        return view('frontend.home', compact('reviews'));
    }
}
