<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
     public function setting_home_page(){
            return view("setting-home");
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $records=Setting::orderBy('id', 'DESC');

        $records=$records->paginate(isset($request->pagesize)?$request->pagesize:10);
        return response()->json([
            'success'=>true,
            'data'=>$records
        ],200);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'company_location' => 'required|max:255',
            'company_name' => 'required|max:255',
            'company_address' => 'required|max:255',
            'company_phone' => 'required|max:15',
            'company_email' => 'required|max:100',
        ]);

        Setting::create($request->except('_token'));
        return redirect()->route('admin.setting-home-page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Amenity::find($id);
        if($item){
            return response()->json([
                'success'=>true,
                'data'=>$item
            ],200);
        }else {
            return response()->json([
                'success'=>false,
            ],404);
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item=Amenity::find($id);

        if(!$item){
            return response()->json([
                'success'=>false,
                'error'=>'invalid'
            ],404);
        }
        $input =array();
        isset($request->amenity) ? $input["amenity"]=$request->amenity : NULL;
        $status=Amenity::find($id)->update($input);
        if($status){
            return response()->json([
                'success'=>true,
                'message'=>'Amenity updated successfully',
                'data'=>$input
            ],200);
        }

        return response()->json([
            'success'=>false,
        ],400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Amenity::find($id);
        if($item){
            try{
                $item->delete();
            }catch (QueryException $e) {
                if ($e->getCode() == 23000) {
                    return response()->json([
                        'success'=>false,
                        'message'=>'Boats are register with this category , cannot delete',
                        'data'=>$item
                    ],409);
                }
            }

            return response()->json([
                'success'=>true,
                'message'=>'Amenity deleted',
                'data'=>$item
            ],200);
        }else {
            return response()->json([
                'success'=>false,
            ],404);
        }
    }

}
