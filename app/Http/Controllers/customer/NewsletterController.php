<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function newsletter(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);

        Newsletter::updateOrCreate([
            'email' => $request->email
        ]);
        return redirect()->back()->with('success', 'Newsletter successfully subscribed');
    }
}
