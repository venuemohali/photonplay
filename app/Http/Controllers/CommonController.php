<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('photo');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/photos', $filename);
        return response()->json([
            'url' => asset('storage/photos/' . $filename)
        ]);
    }

}
