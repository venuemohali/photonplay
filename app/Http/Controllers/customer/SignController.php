<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignController extends Controller
{
    public function radarSpeedSigns(){
        return view('customer.sign');
    }

    public function radarSigns(){
        return view('customer.radar_sign');
    }
}
