<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return view('welcome');
});

// Route::get('/', function () {
//     return view('welcome', ['name'=>'Wasif']); // displaying data
// }); 

// Route::get('contact', [ContactController::class, 'show']);

Route::get('blog', [BlogController::class, 'index']);

Route::get('blog/list', [BlogController::class, 'getBlog'])->name('blog.list');
