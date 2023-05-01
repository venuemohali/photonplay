<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Inquery;
use Illuminate\Http\Request;

class InqueryController extends Controller
{
    public function store(Request $request){
       $request->validate([
        'email' => 'required|email'
       ]);

       Inquery::create($request->except('_token'));

       return redirect()->back()->with('success', 'Inquery Successfully Submitted');
    }
}
