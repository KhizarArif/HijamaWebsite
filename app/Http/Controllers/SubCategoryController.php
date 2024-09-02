<?php

namespace App\Http\Controllers;

use App\Http\Services\SubCategoryServices;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected $subCategoryServices;
    public function __construct(SubCategoryServices $subCategoryServices){
        $this->subCategoryServices = $subCategoryServices;
    }

    public function index(){
        return $this->subCategoryServices->index();
    }
    public function create(){
        return $this->subCategoryServices->create();
    }

}
