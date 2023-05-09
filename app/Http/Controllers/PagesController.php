<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageFeature;
use App\Models\PageSpec;
use App\Models\PageType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $specs = PageSpec::where('page_id', $id)->get();
        // dd($specs);
        return view('solution_pages.page_specification', compact('id','specs'));
    }

    public function editSpecificationSubPage($id){
        $editSpec = PageSpec::find($id);
        return view('solution_pages.edit_specification', compact('id','editSpec'));
    }

    public function createFeaturesSubPage($id){
        $features = PageFeature::where('page_id', $id)->get();
        return view('solution_pages.page_features', compact('id','features'));
    }


    public function createImagesSubPage($id){
        return view('solution_pages.page_images', compact('id'));
    }

    public function index(){
        $pages = PageType::all();
        return view('solution_pages.index', compact('pages'));
    }

    public function subPage($id){
        $subPages = Page::with('images','specs','features')->where('page_type_id', $id)->get();
        return view('solution_pages.sub_page', compact('id','subPages'));
    }

    public function createSubPage($id){
        $page = Page::with('images','specs','features')->find($id);
        // dd($page);
        return view('solution_pages.create_sub_page',compact('id', 'page'));
    }

    // public function store(Request $request){
    //     $request->validate([
    //         'cover_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    //     ]);
    //     $image_path = $request->file('cover_image')->store('image', 'public');

    //     Page::create([
    //         'page_type_id' => $request->page_id,
    //         'title' => $request->title,
    //         'description' => $request->description,
    //         'meta_title' => $request->meta_title,
    //         'meta_description' => $request->meta_description,
    //         'meta_keyword' => $request->meta_keyword,
    //         'schema' => $request->schema,
    //         'cover_image' => $image_path,
    //         'slug' => Str::slug($request->title)
    //     ]);
    // }

    public function UpdateSpecificationSubPage(Request $request){
        $spec = PageSpec::find($request->spec_id);
        $spec->update([
            'spec' => $request->spec,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.manage.solution.create.specification.page', $spec->page_id)->with('success', 'Specification successfully updated');
    }

}
