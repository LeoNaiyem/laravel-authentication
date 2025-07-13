<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup',[AuthController::class,'showSignup']);
Route::post('signup',[AuthController::class,'signup'])->name('signup');
Route::get('signin',[AuthController::class,'showSignin']);
Route::post('signin',[AuthController::class,'signin'])->name('signin');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('dashboard',function(){
    return view('dashboard.home');
})->name('dashboard');
