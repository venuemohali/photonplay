<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductPricingController extends Controller
{
    public function open_pricing_form(Request $request,$id){
        $product=Product::find($id);
        return view('product.pricing.index',compact('product'));
    }
}
