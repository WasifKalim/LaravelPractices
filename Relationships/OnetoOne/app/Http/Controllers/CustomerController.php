<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function add_customer(){
        $mobile = new Mobile();
        $mobile->model = 'LG101';

        $customer = new Customer();
        $customer->name = 'wasif';
        $customer->email = 'wasif@gmail.com';

        $customer->save();

        $customer->mobile()->save($mobile);

    }

    public function show_mobile($id){
        $mobile = Customer::find($id)->mobile;
        // return $mobile;
        return view('mobile',['mobile'=>$mobile]);
    }


}
