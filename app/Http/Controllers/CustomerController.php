<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller{
   

    public function create1() {

        return view('forCustomer');
       
    }

    public function store(Request $request ){

       $cust = new Customer();
       $cust->name=$request->name;  
       $cust->edad=$request->edad;
       $cust->phone=$request->phone;
       $cust->email=$request->email;
       $cust->save();
       return $cust;


    }



}
