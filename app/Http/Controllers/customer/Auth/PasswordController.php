<?php

namespace App\Http\Controllers\customer\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\ResetPasswordJob;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    public function forepassPasswordForm()
    {
        return view('customer.auth.forgot_password_form');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:customers'
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Mail::send('email.reset-password-mail', ['token' => $token], function ($message) use ($request) {
        //     $message->to($request->email);
        //     $message->subject('Reset Password');
        // });
        $data = [
            'token' => $token,
            'email' => $request->email,
            'created_at' => now(),
        ];
        ResetPasswordJob::dispatch($data);
        notify()->success('We have e-mailed your password reset link!');
        return back();
    }

    public function resetPassword($token)
    {
        $user = DB::table('password_resets')->where('token', $token)->first();
        if ($user) {
            $email = $user->email;
            return view('customer.auth.change_password_form', compact('email'));
        }
        return redirect()->route('forgot-password')->with('failed', 'Password reset link is expired');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6'
        ]);
        $user = Customer::where('email', $request->email)->first();

        if ($user) {
            $user['password'] = Hash::make($request->password);
            $user->save();

            DB::table('password_resets')->where('email', $request->email)->delete();
            notify()->success('Success! password has been changed');
            return redirect('/');
        }
        notify()->success('Failed! something went wrong');
        return redirect()->route('forgot-password');
    }
}
