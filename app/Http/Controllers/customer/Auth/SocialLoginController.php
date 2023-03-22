<?php

namespace App\Http\Controllers\customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            return $user = Socialite::driver('google')->user();
            $finduser = Customer::where('provider_id', $user->id)->first();

            if($finduser){
                Auth::guard('customer')->login($finduser);

                return redirect()->intended('dashboard');

            }else{
                $newUser = Customer::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider' => 'GOOGLE',
                    'provider_id'=> $user->id,
                ]);

                Auth::guard('customer')->login($newUser);

                return redirect()->intended('dashboard');
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
