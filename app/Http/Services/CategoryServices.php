<?php

namespace App\Http\Services;

use App\Models\Review;
use Illuminate\Support\Facades\Validator;

class CategoryServices
{
    public function index()
    { 
        return view('admin.category.index');
    }

 
}
