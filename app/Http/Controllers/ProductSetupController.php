<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSpcializationOption;
use App\Models\ProductSpecilization;
use App\Models\SpecializationOption;
use App\Models\Specilization;
use Illuminate\Http\Request;

class ProductSetupController extends Controller
{
    public  function add_specification_form($id){
        $specializations=Specilization::get();
        $product=Product::find($id);
        return view('product.addproduct-specification',compact('specializations','product'));
    }
    public  function add_specification_store(Request $request,$id){
        $request->validate([
            'specialization_id' => 'required',
            'product_id' => 'required',
        ]);
        $post= new ProductSpecilization();
        $post->product_id  = $request->product_id;
        $post->specialization_id = $request->specialization_id;
        $post->save();
        return redirect('admin/product/'.$request->product_id.'/edit');
    }


    public function product_specification_options($pid,$id){
        $product=Product::find($pid);
        $product_spcialization_options=ProductSpcializationOption::with('specialization_options')
            ->where('product_specilizations_id',$id)
            ->get();
        $Sr=1;
        $specialization_id=$id;
        return view('product.specific_option.index',compact( 'Sr','product_spcialization_options','product','specialization_id'));
    }

    public function product_specification_options_add_form($pid,$id){
        $product=Product::find($pid);
        $product_special=ProductSpecilization::find($id);

        $specialization_options=SpecializationOption::where('specialization_id',$product_special->specialization_id)->get();
        $Sr=1;
        return view('product.specific_option.create',compact( 'Sr','specialization_options','product','product_special'));
    }

    public function product_specification_options_add_store(Request  $request){
        $request->validate([
            'specialization_option_id' => 'required',
            'specialization_price' => 'required',
            'product_specilizations_id' => 'required',
            'product_id'=>'required'
        ]);
//        $post= new ProductSpcializationOption();
//        $post->specialization_option_id  = $request->specialization_option_id;
//        $post->specialization_price = $request->specialization_price;
//        $post->product_specilizations_id = $request->product_specilizations_id;
//        $post->product_id = $request->product_id;

        ProductSpcializationOption::updateOrCreate([
            'product_id'=> $request->product_id,
            'specialization_option_id'=>$request->product_specilizations_id
        ],$request->except('_token'));
//        $post->save();
        return redirect('admin/product-specification-options/'.$request->product_id.'/'.$request->specialization_option_id);

    }

}
