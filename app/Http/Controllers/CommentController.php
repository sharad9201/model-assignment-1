<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    function index(){
        $comments = Comment::with('user','post')->get();
        
        return view('comment',['comments'=>$comments]);
    }
}
