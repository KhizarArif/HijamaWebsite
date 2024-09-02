<?php

namespace App\Http\Services;

use App\Models\Review;
use Illuminate\Support\Facades\Validator;

class SubCategoryServices
{
    public function index()
    {
        return view('admin.subCategory.index');
    }

    public function create(){
        return view('admin.subCategory.create');
    }




}
