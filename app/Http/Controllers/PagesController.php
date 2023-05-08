<?php

namespace App\Http\Controllers;

use App\Models\PageType;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        $pages = PageType::all();
        return view('solution_pages.index', compact('pages'));
    }

    public function subPage($id){
        return view('solution_pages.sub_page', compact('id'));
    }

    public function createSubPage($id){
        return view('solution_pages.create_sub_page');
    }

    public function store(){
        //
    }

}
