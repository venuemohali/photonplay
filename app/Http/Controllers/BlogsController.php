<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public  function index(){
        $blogs=Blog::orderBy('id','DESC')->get();

        $Sr = 1;
        return view("blog.index",compact('blogs','Sr'));
    }
    public function create(Request $request)
    {
        $blog_categories=BlogCategory::orderBy('category')->get();
        return view("blog.create" ,compact('blog_categories'));
    }


}
