<?php

namespace App\Http\Controllers;

use App\Models\SpecializationOption;
use App\Models\Specilization;
use Illuminate\Http\Request;

class SpecilizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specilizations = Specilization::all();
        return view('specilization.index', compact('specilizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specilization.add');
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
            'title' => 'required|unique:categories'
        ]);

        Specilization::create([
            'title' => $request->title,
        ]);

        return redirect()->route('admin.specilization.index')->with('status', 'Specilization Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specilization = Specilization::find($id);
        return view('specilization.edit', compact('specilization'));
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
        $specilization = Specilization::find($id);

        $specilization->update([
            'title' => $request->title,
        ]);

        return redirect()->route('admin.specilization.index')->with('status', 'Specilization Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        $specilization = Specilization::find($id);
        if($specilization){
            SpecializationOption::where('specialization_id', $id)->delete();
        }
        $specilization->delete();
        return redirect()->route('admin.specilization.index')->with('status', 'Specilization Successfully deleted');
    }
}
