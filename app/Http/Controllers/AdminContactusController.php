<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inquery;
use Illuminate\Http\Request;

class AdminContactusController extends Controller
{
   public function index(Request  $request){
            $records=Inquery::get();
            return  view('contact_us.index',compact('records'));
   }


}
