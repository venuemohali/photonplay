<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchItemsController extends Controller
{
    public function search_index(Request $request){
        $query = $request->search;

        $results["products"] = Product::where('title', 'LIKE', '%'.$query.'%')->orWhere('description', 'LIKE', '%'.$query.'%')->paginate(10);
        $results["blogs"] = Blog::where('title', 'LIKE', '%'.$query.'%')->orWhere('body', 'LIKE', '%'.$query.'%')->paginate(10);
        return $results;
    }


}
