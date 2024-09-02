<?php

namespace App\Http\Services;

use App\Models\Review;
use Illuminate\Support\Facades\Validator;

class ProductServices
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create(){
        return view('admin.products.create');
    }




}
