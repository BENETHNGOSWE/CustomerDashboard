<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;


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

        $messages = [
            'customer_firstname.string' => 'The first name must be a string.',
        ];

        $request->validate([
            "customer_firstname"=>'required|string',
            "customer_lastname"=>'required',
            "customer_location"=>'required',
            "customer_phonenumber"=>'required|phone_digits',
        ]);

        // Customer::create($request->only(['customer_firstname','customer_lastname','customer_location','customer_phonenumber']));
        // return redirect()->route('customer.index')->with('success','Customer Added');

        try {
            DB::beginTransaction();
            $customer = Customer::create([
                'customer_firstname'=>$request->input('customer_firstname'),
                'customer_lastname'=>$request->input('customer_lastname'),
                'customer_location'=>$request->input('customer_location'),
                'customer_phonenumber'=>$request->input('customer_phonenumber'),

            ]);

            DB::commit();
            return redirect()->route('customer.index')->with('success','Customer Added');
            $customer->save();
            dd($customer);
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->route('customer.index')->with('error','Error happending');
            dd($customer);
    }
   

}


    public function show($customer,$id) {
        $customer = Customer::find($customer->$id);
        return view('customers.show', compact('customer'));
    }

}
