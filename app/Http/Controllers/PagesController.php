<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageFeature;
use App\Models\PageGallery;
use App\Models\PageImage;
use App\Models\PageSpec;
use App\Models\PageType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{

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

    public function createGallerySubPage($id){
        return view('solution_pages.page_gallery', compact('id'));
    }

    public function index(){
        $pages = PageType::get();
        // dd($pages);
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

    public function UpdateSpecificationSubPage(Request $request){
        $spec = PageSpec::find($request->spec_id);
        $spec->update([
            'spec' => $request->spec,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.manage.solution.create.specification.page', $spec->page_id)->with('success', 'Specification successfully updated');
    }

    public function editFeaturesSubPage($id){
        $feature = PageFeature::find($id);
        return view('solution_pages.edit_feature', compact('feature'));
    }

    public function updateFeaturesSubPage(Request $request){
        $feature = PageFeature::find($request->feature_id);
        $feature->update([
            'feature' => $request->feature,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.manage.solution.create.features.page', $feature->page_id)->with('success', 'Features successfully updated');
    }

    public function updateSingleImage(Request $request){
        $request->validate([
            'cover_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $product=Page::find($request->page_id);
        $image_path = $request->file('cover_image')->store('image', 'public');

        $product->update([
            'cover_image' => $image_path,
        ]);

        return redirect()->back()->with('success', 'Cover Image successfully updated');
    }

    public function updateMultiImage(Request $request){
        $product = Page::find($request->page_id);
        $files = [];
        if($request->hasfile('images'))
        {
            PageImage::where('page_id', $request->page_id)->delete();
            foreach($request->file('images') as $file) {
                $image_path = $file->store('image', 'public');
                $files[] = $image_path;
                if(isset($image_path)){
                    PageImage::create([
                        'page_id' => $request->page_id,
                        'image' => $image_path,
                    ]);
                }
            }}
//        print_r($files);
        return redirect()->back()->with('success', 'Images are successfully uploaded');
    }

    public function store(Request $request){
        $request->validate([
            'cover_image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $sub_page = Page::find($request->sub_page_id);
        if($request->file('cover_image')){
            $image_path = $request->file('cover_image')->store('image', 'public') ?? null;
        }else{
            $image_path = $sub_page->cover_image;
        }

        $sub_page->update([
            'title' => $request->title,
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'schema' => $request->schema,
            'cover_image' => $image_path,
        ]);

        return redirect()->back()->with('success', 'Page successfully updated');
    }

    public function subPageGallery(Request $request){
        $product = Page::find($request->page_id);
        $files = [];
        if($request->hasfile('images'))
        {
            PageGallery::where('page_id', $request->page_id)->delete();
            foreach($request->file('images') as $file) {
                $image_path = $file->store('image', 'public');
                $files[] = $image_path;
                if(isset($image_path)){
                    PageGallery::create([
                        'page_id' => $request->page_id,
                        'image' => $image_path,
                    ]);
                }
            }}
        return redirect()->back()->with('success', 'Gallery Image are successfully uploaded');
    }
}
