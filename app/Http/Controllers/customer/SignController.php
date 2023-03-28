<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SignController extends Controller
{
    public function radarSpeedSigns(){
        $products = Product::get();
        return view('customer.sign', compact('products'));
    }

    public function radarSigns($id){
        $product = Product::with('images','specilizations.specilization','specilizations.options','category')->find($id);
        // dd($product);
        return view('customer.radar_sign', compact('product'));
    }
}
