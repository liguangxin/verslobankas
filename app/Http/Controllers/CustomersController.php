<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function update(Request $request)
    {
        return Customer::where('id', auth()->user()->id)->update([
            'name' => $request->user_name,
            'user_type' => $request->user_type,
            'email' => $request->email,
            'billing_email' => $request->billing_email,
            'city' => $request->city,
            'phone' => $request->phone,
            'compnay_name' => $request->compnay_name,
            'company_code' => $request->company_code,
            'company_vat' => $request->company_vat,
            'company_address' => $request->company_address,
            'web_site' => $request->web_site,
        ]);
    }
}
