<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Inquery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InqueryController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if($validator->fails()){

            return redirect($request->url.'#inquiry')->with('error',  $validator->errors()->first());
        }
       Inquery::create($request->except('_token'));

       return redirect($request->url.'#inquiry')->with('success', 'Inquery Successfully Submitted');
    }
}
