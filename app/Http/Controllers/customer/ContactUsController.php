<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(){
        return view('customer.contact_us');
    }

    public function aboutUs(){
        return view('customer.about_us');
    }

    public function blog(){
        return view('customer.blog');
    }

    public function blog_show($page_name){

        $blog=Blog::where('slug',$page_name)->first();
        $categories=BlogCategory::get();

        if(!isset($blog)){
            abort(404);
        }
        $tags=explode(",",$blog->keywords);
        $date = Carbon::createFromFormat('Y-m-d H:i:s', '2023-04-27 17:43:36');
        $blog_created_date = $date->format('d F, Y');
        $latestBlogRecords = Blog::latest()->take(3)->get();
        return view('customer.blog',compact('blog','tags','blog_created_date','categories','latestBlogRecords'));
    }

    public function signal(){
        return view('customer.signal');
    }

    public function smartcity(){
        return view('customer.smartcity');
    }
    public function variableMessage(){
        return view('customer.variable_message');
    }
}
