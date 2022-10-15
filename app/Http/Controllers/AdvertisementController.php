<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    //
    function index(){

        $advertise = Advertisement::all();
        return $advertise;
    }
}
