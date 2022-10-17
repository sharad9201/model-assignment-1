<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    //
    function index(){
        
        $communities = Community::with('post')->get();
        
        return view('community',['communities'=>$communities]);
    }
}
