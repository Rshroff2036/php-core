<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\Auth\RegisterController;

Route::resource('policies', PolicyController::class);
Route::resource('claims', ClaimController::class);
Route::put('claims/{id}/status/{status}', [ClaimController::class, 'updateStatus'])->name('claims.updateStatus');
Route::post('register', [RegisterController::class, 'register'])->name('register');
