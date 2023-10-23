<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view("customer.index", compact("customers"));
    }


    public function create() {
        return view("customers.create");
    }

    public function store(Request $request){
        $request->validate([
            "customer_firstname"=>'required',
            "customer_lastname"=>'required',
            "customer_location"=>'required',
            "customer_phonenumber"=>'required',
        ]);

        Customer::create($request->only(['customer_firstname','customer_lastname','customer_location','customer_phonenumber']));
        return redirect()->route('customer.index')->with('success','Customer Added');
    }


    public function show($customer,$id) {
        $customer = Customer::find($customer->$id);
        return view('customers.show', compact('customer'));
    }

}
