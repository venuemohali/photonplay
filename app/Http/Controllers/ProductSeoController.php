<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductSeoController extends Controller
{
    //open_seo_form
    public function open_seo_form(Request $request,$id){
        $product=Product::find($id);
        return view('product.seo.index',compact('product'));
    }


}
