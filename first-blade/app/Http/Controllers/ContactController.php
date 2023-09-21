<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// route controller ko call karega controller se view ko call karege
class ContactController extends Controller
{
    function show(){
        $name = 'Wasif';
        $students = ['Rahul', 'Shoaib', 'Raj', 'Kamlesh'];
        return view('contact', ['nm'=>$name, 'students'=>$students]);
    }
}
