<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    public function editProfile(){
        return view('customer.profile.edit_profile');
    }
}
