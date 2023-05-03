<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderedProduct;
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


        return view('order.show',compact('order'));
    }
}
