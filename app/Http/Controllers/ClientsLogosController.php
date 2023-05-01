<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsLogosController extends Controller
{
    public function index(Request $request){
        return view('clients.index');
    }

    public function create(){
            return view('clients.create');
    }

    public function store(Request $request){

    }



}
