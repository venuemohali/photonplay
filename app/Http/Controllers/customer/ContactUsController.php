<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(){
        return view('customer.contact_us');
    }

    public function aboutUs(){
        return view('customer.about_us');
    }
}
