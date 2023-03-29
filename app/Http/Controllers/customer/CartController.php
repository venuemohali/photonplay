<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function shoppingBag(){
        $carts =  json_decode($_COOKIE['cart_cookie']);
        return view('customer.cart.shopping_bag', compact('carts'));
    }

    public function addShoppingBag(Request $request){
        if(!Session::get('user')){
            $cart = array();
            if(!empty($_COOKIE['cart_cookie'])){
                $cart = json_decode($_COOKIE['cart_cookie'], true);
            }

            array_push($cart, $request->except('_token'));
            setcookie('cart_cookie', json_encode($cart), time() + 3600, "/");
        }else{
            Cart::updateOrCreate([
                'user_id' => Session::get('user')->id,
                'product_id' => $request->product_id,
                'price' => $request->price,
            ],[
                'title' => $request->title,
                'category' => $request->category,
                'quantity' => $request->quantity,
                'cover_image' => $request->cover_image,
            ]);
        }
        return redirect()->route('customer.shopping.bag');
    }

    public function confirmation(){
        return view('customer.cart.confirmation');
    }

    public function checkout(){
        return view('customer.cart.checkout');
    }

    public function removeCartItem($id){
        //  json_decode($_COOKIE['cart_cookie'])[$id];

        $arrays = json_decode($_COOKIE['cart_cookie'], true);
        unset($arrays[$id]);

        // return json_decode($_COOKIE['cart_cookie'], true);
        // foreach($arrays as $key => $array){
        //     unset($array[$key][$id]);
        // }

        setcookie('cart_cookie', json_encode($arrays), time() + 3600, "/");
        return redirect()->route('customer.shopping.bag');
    }
}
