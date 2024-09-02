<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductServices;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productServices;
    public function __construct(ProductServices $productServices){
        $this->productServices = $productServices;
    }

    public function index(){
        return $this->productServices->index();
    }
    public function create(){
        return $this->productServices->create();
    }
}
