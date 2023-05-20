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
            'email' => 'required|email',
            'first_name'=>'max:20',
            'last_name'=>'max:20'
        ]);

        if($validator->fails()){

            return redirect($request->url.'#inquiry')->with('error',  $validator->errors()->first());
        }
       Inquery::create($request->except('_token'));

       return redirect($request->url.'#inquiry')->with('success', 'Inquiry successfully submitted.');
    }
}
