<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;

Route::get('/', function () {
    return view('welcome');
});

// MECHANIC -> CAR -> OWNER

Route::get('add-mechanic', [MechanicController::class, 'add_mechanic']);
Route::get('add-car/{id}', [CarController::class, 'add_car']);
Route::get('add-owner/{id}', [OwnerController::class, 'add_owner']);

Route::get('show-owner/{id}', [OwnerController::class, 'show_owner']);