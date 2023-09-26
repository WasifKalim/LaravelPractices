<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;
use App\Models\Customer;

class MobileController extends Controller
{
    public function show_customer($id){
        // mobile k id p customer k data nikalna hn
        $customer = Mobile::find($id)->customer;
        // return $customer;
        return view('customer',['customer'=>$customer]);
    }
}
