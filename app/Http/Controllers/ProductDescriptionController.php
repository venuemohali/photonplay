<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDescriptionController extends Controller
{
    public function open_description_form(Request $request,$id){
        $product=Product::find($id);
        return view('product.description.index',compact('product'));
    }
}
