<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request){
        $orders=Order::with(['orderedProducts','user'])->select('id','order_number','grand_total','status','payment_status','billing_city','created_at')->get();

        $Sr=1;
        return view('order.index',compact('orders','Sr'));
    }
    public function show(Request $request,$id){
        $order=Order::with(['orderedProducts','user'])->find($id);
        foreach($order->orderedProducts as $prd){
         $prd["title"]=Product::find($prd->product_id)->title;
         $prd["cover_image"]=Product::find($prd->product_id)->cover_image;
        }

//        return $order;

        return view('order.show',compact('order'));
    }
}
