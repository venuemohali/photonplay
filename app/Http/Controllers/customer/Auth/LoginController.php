<?php

namespace App\Http\Controllers\customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Socialite;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('customer')->user();
            return $next($request);
        });

        if(Session::get('user')){
            return redirect()->route('customer.dashboard');
        }else{
            return redirect()->route('customer.loginForm');
        }
    }

    public function loginForm()
    {
        return view('customer.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (!Auth::guard('customer')->attempt($credentials)) {
            // return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
            notify()->error('Email or Password doesnt match');
            return redirect("/");
        }

        Session::put('user', Auth::guard('customer')->user());
        notify()->success('Login Successfully');
        return redirect()->intended('dashboard');
    }

    public function registerForm()
    {
        return view('customer.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6',
        ]);

        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        notify()->success('Your account has been registered successfully');
        return redirect()->route('customer.loginForm');
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function Callback($provider)
    {
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $users       =   User::where(['email' => $userSocial->getEmail()])->first();
        if ($users) {
            Auth::login($users);
            return redirect('/');
        } else {
            $user = Customer::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);
            return redirect()->route('home');
        }
    }
}
