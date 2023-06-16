<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::prefix('auth')->group(function () {
    Route::get('/login', function(){
        return view("auth.login", ['name' => 'Login']);
    })->name("auth.login");
    Route::get('/register', function(){
        return view("auth.register", ['name' => 'Register']);
    })->name("auth.register");
    Route::get('/forgot-password', function(){
        return view("auth.forgot-password", ['name' => 'Forgot-password']);
    })->name("auth.forgot-password");
    Route::get('/reset-password', function(){
        return view("auth.reset-password", ['name' => 'Reset-password']);
    })->name("auth.reset-password");
});
