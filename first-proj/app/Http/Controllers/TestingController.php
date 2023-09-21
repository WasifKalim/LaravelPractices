<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

class TestingController extends Controller{
    
    public function __invoke()
    {   
        return view('testing');
    }
}

?>