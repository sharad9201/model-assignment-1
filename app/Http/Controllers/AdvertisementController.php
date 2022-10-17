<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    //
    function index(){

        $advertisements = Advertisement::with('community')->get();
        
        return view('advertisement',['advertisements'=>$advertisements]);
    }
}
