<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PDF;
class OrderController extends Controller
{

    public function generateInvoice(Request $request,$id)
    {
        $pdf = PDF::loadView('reports.invoice');
        return $pdf->download('invoice.pdf');
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function change_status_order(Request $request, $id){
        $order=Order::find($id);
        if(isset($request->status)){
            $order->delivery_status=$request->status;
            $order->save();

            return response()->json([
                "success"=>true,
                "status"=>$request->status,
                "message"=>"Status Updated",
            ]);
        }

        return response()->json([
            "success"=>false,
            "status"=>'error',
            "message"=>"Sorry, unable to change status !",
        ]);

    }


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

    public function changeOrderStatus(Request $request){
        dd($request->all());
    }
}
