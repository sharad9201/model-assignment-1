<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Post;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    function index(){
        
        $homepage = Post::first();
        
        // dd($homepage);
        return view('homepage',['homepages'=>$homepage]);
    }
}
