<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
   function index(){
    $categories = Category::with('post')->get();
        
    return view('category',['categories'=>$categories]);
   }
}
