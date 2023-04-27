<?php

namespace App\Http\Controllers\customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Stripe;

class SocialLoginController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $user = Socialite::driver('google')->user();
            $finduser = Customer::where('provider_id', $user->id)->first();

            if($finduser){
                Auth::guard('customer')->login($finduser);

                return redirect()->intended('radar-speed-signs');

            }else{

                $newUser = Customer::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider' => 'GOOGLE',
                    'provider_id'=> $user->id,
                ]);
                $customer = \Stripe\Customer::create([
                    'name' => isset($newUser->name) ? $newUser->name : null,
                    'email' => isset($newUser->email) ? $newUser->email : null,
                ]);
                if ($customer) {
                    $newUser->update(['stripe_id' => $customer->id]);
                }

                Auth::guard('customer')->login($newUser);

                return redirect()->intended('radar-speed-signs');
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
