<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    //
    function index(){

        $community = Community::all();
        return $community;
    }
}
