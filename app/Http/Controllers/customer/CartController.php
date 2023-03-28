<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function shoppingBag(){
        $carts = Cart::get();
        return view('customer.cart.shopping_bag', compact('carts'));
    }

    public function addShoppingBag(Request $request){

        $product = Cart::updateOrCreate([
            'user_id' => Session::get('user')->id,
            'product_id' => $request->product_id,
            'price' => $request->price,
        ],[
            'title' => $request->title,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'cover_image' => $request->cover_image,
        ]);

        return view('customer.cart.shopping_bag');
    }

    public function confirmation(){
        return view('customer.cart.confirmation');
    }

    public function checkout(){
        return view('customer.cart.checkout');
    }
}
