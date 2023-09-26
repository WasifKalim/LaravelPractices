<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($id){
        // $customer = Customer::find($id);
        // dd() or var_dump() can be used dd stops the further execution
        // dd($customer);
        // var_dump($customer->name);
        // var_dump($customer->email);

        // // accessing the second table data
        // var_dump($customer->mobile->model);
        
        // // accessing the second table data
        // $customer = Mobile::find($id)->customer;
        // dd($customer);

        $mobile = Customer::find($id)->mobile;
        dd($mobile);
    }
}
