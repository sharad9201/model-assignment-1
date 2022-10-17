<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //
    function index(){

        $posts = Post::with('user')->get();
        
        return view('post',['posts'=>$posts]);
        // $post = Post::all();
        // return view('Home',compact('user'));
    }
 

}
