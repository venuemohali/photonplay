<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shoppingBag(){
        return view('customer.cart.shopping_bag');
    }

    public function addShoppingBag(Request $request){
        dd($request->all());
    }

    public function confirmation(){
        return view('customer.cart.confirmation');
    }

    public function checkout(){
        return view('customer.cart.checkout');
    }
}
