<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //
    function index(){

        $post = Post::all();
        return $post;
    }
 

}
