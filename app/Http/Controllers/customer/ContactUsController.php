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

    public function blog(){
        return view('customer.blog');
    }

    public function signal(){
        return view('customer.signal');
    }

    public function smartcity(){
        return view('customer.smartcity');
    }
    public function variableMessage(){
        return view('customer.variable_message');
    }
}
