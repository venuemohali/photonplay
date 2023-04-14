<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function shoppingBag(Request $request){
        $taxes = DB::table('settings')->select('shipping_time','gst')->first();
        $coupon = Coupon::where('coupon_name', $request->coupon)->first();
        $discount = 0;
        $discounted_amount = 0;
        $coupon_name = '0';
        if($coupon){
            if ($coupon->expiry_date < date('Y-m-d')) {
                return redirect()->back()->with('error', 'Coupon expired! Please try another one');
            }
            if ($coupon->type == '1') {
                $discount = $coupon->value;
                $discounted_amount = $coupon->value;
                $coupon_name = $coupon->coupon_name;
            } else if ($coupon->type == '2') {
                $discount = ($request->total * $coupon->value) / 100;
                $discounted_amount = ($request->total * $coupon->value) / 100;
                $coupon_name = $coupon->coupon_name;
            }else{
                $discount = $request->total;
                $discounted_amount = 0;
            }
        }
        if(isset($request->remove_coupon)){
            $discount = 0;
            $discounted_amount = 0;
            $coupon_name = '0';
        }

        if(!Session::get('user')){
            $cart_table =  Cart::where('session_id', Session::getId())->get();
            $total = 0;
            foreach($cart_table as $cart_t){
                $total += ($cart_t->price * $cart_t->quantity);
            }
            $grand_total = $total - $discount;
        }else{
            $cart_table =  Cart::where('user_id', Session::get('user')->id)->get();
            $total = 0;
            foreach($cart_table as $cart_t){
                $total += ($cart_t->price * $cart_t->quantity);
            }
            $grand_total = $total - $discount;
        }
        return view('customer.cart.shopping_bag', compact('cart_table','taxes','grand_total', 'discounted_amount', 'coupon_name','total'));
    }

    public function addShoppingBag(Request $request){
        $specPrice = 0;
        if(isset($request->dynamic_spec)){
            foreach($request->dynamic_spec as $specs){
                foreach(explode(',', $specs) as $spec){
                    $specPrice += DB::table('product_spcialization_options')->where('id', $spec)->value('specialization_price');
                }
            }
        }

        if(!Session::get('user')){
        $cart = Cart::where(['session_id' => Session::getId(), 'product_id' => $request->product_id, 'price' => $request->price,])->first();
            if($cart){
                $cart->update(['quantity' => $cart->quantity + $request->quantity]);
            }else{
                Cart::create([
                    'session_id' => Session::getId(),
                    'option_ids' => $specs ?? null,
                    'product_id' => $request->product_id,
                    'price' => $request->price + $specPrice,
                    'title' => $request->title,
                    'category' => $request->category,
                    'quantity' => $request->quantity,
                    'cover_image' => $request->cover_image,
                ]);
            }

        }else{
            $cart = Cart::where(['user_id' => Session::get('user')->id, 'product_id' => $request->product_id, 'price' => $request->price,])->first();
            if($cart){
                $cart->update(['quantity' => $cart->quantity + $request->quantity]);
            }else{
                Cart::create([
                    'user_id' => Session::get('user')->id,
                    'product_id' => $request->product_id,
                    'option_ids' => $specs ?? null,
                    'price' => $request->price + $specPrice,
                    'title' => $request->title,
                    'category' => $request->category,
                    'quantity' => $request->quantity,
                    'cover_image' => $request->cover_image,
                ]);
            }

        }
        return redirect()->route('customer.shopping.bag');
    }

    public function confirmation(){
        return view('customer.cart.confirmation');
    }

    public function checkout(Request $request){
        $coupon_name = $request->coupon_s;
        $discount = $request->discount_s;
        $taxes = DB::table('settings')->select('shipping_time','gst')->first();
        $cart_table =  Cart::where('user_id', Session::get('user')->id)->get();
        $total = 0;
            foreach($cart_table as $cart_t){
                $total += ($cart_t->price * $cart_t->quantity);
            }
        return view('customer.cart.checkout', compact('taxes','cart_table','total','coupon_name','discount'));
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

    public function deleteCartTableItem($id){
        Cart::find($id)->delete();
        return redirect()->route('customer.shopping.bag');
    }

    public function placeOrder(Request $request){
        // dd($request->all());
    }
}
