<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(PageController::class)->group(function(){
    // First parameter - class name & second - method name
    Route::get('/', 'showHome')->name('home');
    Route::get('/blog', 'showBlog')->name('blog');
    Route::get('/user/{id}','showUser')->name('user');
});

Route ::get('/test', TestingController::class);


// First parameter - class name & second - method name
// Route::get('/', [PageController::class,'showHome'])->name('home');
// Route::get('/user/{id}', [PageController::class,'showUser'])->name('user');
// Route::get('/blog', [PageController::class, 'showBlog'])->name('blog');

require __DIR__.'/auth.php';
