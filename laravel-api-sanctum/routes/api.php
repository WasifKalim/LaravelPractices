<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 

// Route::get('/students', function(){
//     return "All student Info API";
// });


// Public Routes
// Route::get('/students', [StudentController::class, 'index']); 
// Route::get('/students/{id}', [StudentController::class, 'show']);

// Route::post('/students', [StudentController::class, 'store']); 
// Route::put('/students/{id}', [StudentController::class, 'update']); 

// Route::delete('/students/{id}', [StudentController::class, 'destroy']); 

// Route::get('/students/search/{city}', [StudentController::class, 'search']); 

// Registration
Route::post('/register',[UserController::class, 'register']);

Route::post('/login',[UserController::class, 'login']);

// Protected Routes
    // Route::middleware('auth:sanctum')->get('/students', [StudentController::class, 'index']); 
    // Route::middleware('auth:sanctum')->get('/students/{id}', [StudentController::class, 'show']);

    // groupRoute
    // Route::middleware(['auth:santum'])->group(function(){
    //     Route::get('/students', [StudentController::class, 'index']); 
    //     Route::get('/students/{id}', [StudentController::class, 'show']);
        
    //     Route::post('/students', [StudentController::class, 'store']); 
    //     Route::put('/students/{id}', [StudentController::class, 'update']); 
        
    //     Route::delete('/students/{id}', [StudentController::class, 'destroy']); 
        
    //     Route::get('/students/search/{city}', [StudentController::class, 'search']); 
    //     Route::post('/logout', [UserController::class, 'logout']);
    // });

// Partially Proctected
// public
Route::get('/students', [StudentController::class, 'index']); 
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::get('/students/search/{city}', [StudentController::class, 'search']); 
Route::middleware(['auth:santum'])->group(function(){
        Route::post('/students', [StudentController::class, 'store']); 
        Route::put('/students/{id}', [StudentController::class, 'update']); 
        
        Route::delete('/students/{id}', [StudentController::class, 'destroy']);
        
        Route::post('/logout', [UserController::class, 'logout']);
});

// Crud single line for public only
Route::resource('students', StudentController::class);

// TO see all user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ----------------------------------------------------------
// Put to update complete data && Patch to update partially