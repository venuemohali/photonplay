<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignController extends Controller
{
    public function radarSpeedSigns(){
        $products = Product::get();
        return view('customer.sign', compact('products'));
    }

    public function radarSigns($id){
        $product = Product::with('images','specilizations.specilization','specilizations.options','specilizations.options.specializationoptions','category')->find($id);
        // dd($product);
        return view('customer.radar_sign', compact('product'));
    }

    public function specificationAjax(Request $request){
        $specs = $request->dict;
        $data = array();
        foreach($specs as $key => $spec){
           $ids =  DB::table('product_spcialization_options')->where('id', $spec)->orderBy('id', 'asc')->value('id');
           array_push($data, $ids);
        }
        return $data;
    }
}
