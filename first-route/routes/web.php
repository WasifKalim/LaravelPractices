<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\alert;

function getUsers(){
    return [
        1 => ['name' => 'Wasif', 'phone' => '4545234', 'city'=> 'Deha'], 
        2 => ['name' => 'Was', 'phone' => '42534', 'city'=> 'Dehs'],
        3 => ['name' => 'Raj', 'phone' => '545634', 'city'=> 'Dehd'],
        4 => ['name' => 'Ranjan', 'phone' => '5645634', 'city'=> 'Ddehd']
    ];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    // $name = "Wasif";
    // return view('users', [
    //         'user' => $name, 
    //         'city' => '<script>alert("Hello");</script>'
    // ]);

    // return view('users')
    // ->with('user', $name)
    // ->with('city', 'patna');

    // return view('users')
    // ->withUser($name) 
    // ->withCity('patna');

    // $myArray = [
    //     1 => ['name' => 'Wasif', 'phone' => '4545234', 'city'=> 'Deha'], 
    //     2 => ['name' => 'Was', 'phone' => '42534', 'city'=> 'Dehs'],
    //     3 => ['name' => 'Raj', 'phone' => '545634', 'city'=> 'Dehd'],
    //     4 => ['name' => 'Ranjan', 'phone' => '5645634', 'city'=> 'Ddehd']
    // ];

    $names = getUsers();

    return view('users',[
        'user' => $names,
    ]);
});

Route::get('/user/{id}', function($id){
    $users = getUsers();
    
    abort_if(!isset($users[$id]), 404);
    
    
    $user = $users[$id];
    return view('user', ['id'=> $user]);
})->name('view.user');



require __DIR__.'/auth.php';
