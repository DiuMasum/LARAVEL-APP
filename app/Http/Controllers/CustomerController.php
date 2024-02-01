<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        return view('customer');
    }

    public function store(Request $request){
        echo "<pre>";
        print_r($request->all());

        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->gender = $request->input('gender');
        $customer->dob = $request->input('dob');
        $customer->password = bcrypt($request->input('password'));
        $customer->save();
    }


}
