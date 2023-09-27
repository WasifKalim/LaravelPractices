<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\file;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class FileController extends Controller
{
    public function index(){

        // Fetch all records
        $files = file::select('*')->get();

        $data['files'] = $files;

        return view('upload',$data);
    }

    // Submit form
    public function submitform(Request $request){

        $validator = Validator::make($request->all(), [
             'name' => 'required',
             'file' => 'required|mimes:png,jpg,jpeg,pdf,docx|max:2048'
        ]);

        if ($validator->fails()) {
             return redirect()->Back()->withInput()->withErrors($validator);
        }else{

             if($request->file('file')) {

                   $file = $request->file('file');
                   $filename = $file->hashName();

                   // File upload location
                   $location = 'uploads';

                   // Upload file
                   $file->move($location,$filename);

                   // File path
                   $filepath = url('uploads/'.$filename);

                   // Insert record
                   $insertData_arr = array(
                        'name' => $request->name,
                        'filepath' => $filepath
                   );

                   file::create($insertData_arr);

                   // Session
                   Session::flash('alert-class', 'alert-success');
                   Session::flash('message','Record inserted successfully.');

             }else{

                   // Session
                   Session::flash('alert-class', 'alert-danger');
                   Session::flash('message','Record not inserted');
             }

        }

        return redirect('/w');

    }
}
