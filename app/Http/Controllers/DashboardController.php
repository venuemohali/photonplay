<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $category = Category::count();
        $products = Product::count();
        $orders = 10;
        return view('Dashboard', compact('users', 'category', 'products', 'orders'));
    }
}
