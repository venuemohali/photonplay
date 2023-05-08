<?php

namespace App\Http\Controllers;

use App\Models\PageType;
use Illuminate\Http\Request;

class PagesController extends Controller
{
//
//
//
//
//Route::get('create-sub-page/{id}', [PagesController::class, 'createSubPage'])->name('manage.solution.create.sub.page');
//Route::get('create-specification-page/{id}', [PagesController::class, 'createSpecificationSubPage'])->name('manage.solution.create.specification.page');
//Route::get('create-features-page/{id}', [PagesController::class, 'createFeaturesSubPage'])->name('manage.solution.create.features.page');
//Route::get('create-images-page/{id}', [PagesController::class, 'createImagesSubPage'])->name('manage.solution.create.images.page');
//


    public function createSpecificationSubPage($id){
        return view('solution_pages.page_specification', compact('id'));
    }

    public function createFeaturesSubPage($id){
        return view('solution_pages.page_features', compact('id'));
    }


    public function createImagesSubPage($id){
        return view('solution_pages.page_images', compact('id'));
    }

    public function index(){
        $pages = PageType::all();
        return view('solution_pages.index', compact('pages'));
    }

    public function subPage($id){
        return view('solution_pages.sub_page', compact('id'));
    }

    public function createSubPage($id){

        return view('solution_pages.create_sub_page',compact('id'));
    }






    public function store(){
        //
    }

}
