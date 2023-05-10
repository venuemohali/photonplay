<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogLike;
use App\Models\Category;
use App\Models\ClientTestimonial;
use App\Models\Page;
use App\Models\Product;
use App\Models\Setting;
use App\Models\TeamMember;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(){
        $setting = Setting::first();
        return view('customer.contact_us', compact('setting'));
    }

    public function aboutUs(){

        $blogs = Blog::latest()->take(3)->get();
        foreach ($blogs as $blog){
            $blog["category"]=BlogCategory::find($blog->blog_category_id)->category;
        }

        return view('customer.about_us',compact('blogs'));
    }

    /**
     * @return Application|Factory|View
     */
    public function blog(){
        return view('customer.blog');
    }

    public function blog_listing(){
        $blogs=Blog::paginate(5);
        foreach ($blogs as $blog){
            $date = Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at);
            $blog_created_date = $date->format('d F, Y');
            $blog["blog_created_date"]=$blog_created_date;
            $blog["likes"]=BlogLike::where('blog_id',$blog->id)->count();

        }
        $categories=BlogCategory::take(5)->get();
        $latestBlogRecords = Blog::latest()->take(3)->get();

        return view('customer.blog_listing',compact('blogs','categories','latestBlogRecords'));
    }

    /**
     * @param $page_name
     * @return Application|Factory|View
     */
    public function blog_show(Request  $request,$page_name){

        $blog=Blog::where('slug',$page_name)->first();
        $categories=BlogCategory::take(5)->get();

        if(!isset($blog)){
            abort(404);
        }
        $tags=explode(",",$blog->keywords);
        $date = Carbon::createFromFormat('Y-m-d H:i:s', '2023-04-27 17:43:36');
        $blog_created_date = $date->format('d F, Y');
        $latestBlogRecords = Blog::latest()->take(3)->get();
        $relatedBlogRecords = Blog::where('blog_category_id',$blog->blog_category_id)->latest()->take(5)->get();
        $like=BlogLike::where('session_id',$request->getSession()->getId())
            ->where('blog_id',$blog->id)->exists();
        $count=BlogLike::where('blog_id',$blog->id)->count();
        return view('customer.blog',compact('blog','tags','blog_created_date','categories','latestBlogRecords','relatedBlogRecords','like','count'));
    }

    public function signal(){
        return view('customer.signal');
    }

    public function smartcity(){
        return view('customer.smartcity');
    }
    public function variableMessage(){
        $page = Page::where('page_type_id', Page::VMS)->get();
        // dd($page);
        return view('customer.variable_message', compact('page'));
    }
    public function variableSpeedLimit(){
        $page = Page::where('page_type_id', Page::VSLS)->get();
        // dd($page);
        return view('customer.variable_speed_limit');
    }
    public function pasengerInformationDisplay(){
        $page = Page::with('specs','images','features')->where('page_type_id', Page::PIDS)->first();
        // dd($page);
        return view('customer.pessenger_information', compact('page'));
    }
    public function portableVariableMessageSigns(){
        $products = Category::with('products', 'products.specilizations.options.specializationoptions')->where('title','Portable Variable Signs')->whereHas('products', function($query) {
            $query->where('status', 'Listed');
        })->get();
        // dd($products);
        return view('customer.portable_variable_message_signs', compact('products'));
    }

    public function laneControlSystem(){
        return view('customer.lane_control_system');
    }

    public function pvmsICop($id){
        $product = Product::with('category')->find($id);
        // dd($product);
        return view('customer.pvms_icop', compact('product'));
    }

    public function vmsSubPage($slug){
        $page = Page::with('specs','images','features')->where('slug', $slug)->first();
        // dd($page);
    }
}
