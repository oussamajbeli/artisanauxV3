<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Controllers\ProductsController;
use App\Models\Products;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    function categories(){
        $data= Category::all();
        return view('categories',['categories'=>$data]);
    }


}
