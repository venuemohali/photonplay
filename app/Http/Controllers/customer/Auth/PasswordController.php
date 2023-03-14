<?php

namespace App\Http\Controllers\customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasswordController extends Controller
{
    public function forgotPassword(Request $request){

        $request->validate([
            'email' => 'required|exists:customers'
        ]);
        DB::table('password_resets')->where('email', $request->email)->delete();

        $rand = mt_rand(1000, 9999);
        $data = [
            'email' => $request->email,
            'code' => $rand,
            'created_at' => now(),
        ];
        $code = DB::table('password_resets')->insert($data);

        // Mail::to($request->email)->send(new ResetPasswordMail($data));
        // SendResetMail::dispatch($data);

        return response()->json([
            'status' => true,
            'message' => 'otp sent successfully',
            // 'data' => $rand
        ]);
    }

}
