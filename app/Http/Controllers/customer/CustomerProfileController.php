<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerProfileController extends Controller
{
    public function editProfileForm(){
        $customer = Customer::find((Session::get('user')->id));
        return view('customer.profile.edit_profile', compact('customer'));
    }

    public function address(){
        return view('customer.profile.address');
    }

    public function history(){
        return view('customer.profile.history');
    }

    public function overview(){
        return view('customer.profile.overview');
    }
    public function savedCard(){
        return view('customer.profile.saved_card');
    }

    public function addAddressForm(){
        return view('customer.profile.add_address');
    }

    public function profileUpdate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'phone_number' => 'nullable|integer',
        ]);
        $customer = Customer::find(Session::get('user')->id);

        $customer->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => '+'.$request->phone_number,
            'company_name' => $request->company_name,
        ]);

        return redirect()->route('customer.edit.profile');
    }

    public function storeAddress(Request $request){
        $request->validate([
            'street_number' => 'required',
            'flat_suite' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'postcode' => 'required',
        ]);

        $data = $request->except('_token');
        $data['user_id'] = Session::get('user')->id;

        UserAddress::create($data);

        return redirect()->route('customer.address');
    }
}
