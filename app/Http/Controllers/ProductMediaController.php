<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductMediaController extends Controller
{
    public function open_media_form(Request $request,$id){
        $product=Product::find($id);
        return view('product.media.index',compact('product'));
    }
}
