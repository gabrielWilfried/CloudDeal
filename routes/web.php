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
        return view("auth.login", ['name' => 'Login', 'head' => 'Account']);
    })->name("auth.login");
    Route::get('/register', function(){
        return view("auth.register", ['name' => 'Register', 'head' => 'Account']);
    })->name("auth.register");
    Route::get('/forgot-password', function(){
        return view("auth.forgot-password", ['name' => 'Forgot-password', 'head' => 'Account']);
    })->name("auth.forgot-password");
    Route::get('/reset-password', function(){
        return view("auth.reset-password", ['name' => 'Reset-password', 'head' => 'Account']);
    })->name("auth.reset-password");
    Route::get('/verify-email', function(){
        return view("auth.email-verification", ['name' => 'Verify-Email', 'head' => 'Account']);
    })->name("auth.verify-email");
});

Route::prefix('dashboard')->group(function(){
    Route::get('/', function () {
        return view('pages.dashboard',  ['name' => 'Dashboard',  'head' => 'Dashboard']);
    })->name('dashboard');
    Route::get('/side-bar', function () {
        return view('pages.dashboard-sidebar',  ['name' => 'SideBar',  'head' => 'Dashboard']);
    })->name('dashboard.sidebar');
    Route::get('/ad-detail', function () {
        return view('pages.single-ad',  ['name' => 'Ad Detail',  'head' => 'Dashboard']);
    })->name('dashboard.singe-ad');
    Route::get('/ad-list', function () {
        return view('pages.ad-list',  ['name' => 'Ad List',  'head' => 'Dashboard']);
    })->name('dashboard.ad-list');
});

Route::get('/contact', function () {
    return view('pages.contact',  ['name' => 'Contact',  'head' => 'Contact Us']);
})->name('contact');

Route::get('/about', function () {
    return view('pages.about',  ['name' => 'About',  'head' => 'About Us']);
})->name('about');

Route::get('/payment', function () {
    return view('pages.payment',  ['name' => 'Payment',  'head' => 'Payment']);
})->name('payment');

Route::get('/wishlist', function () {
    return view('pages.wishlist',  ['name' => 'Wishlist',  'head' => 'Wishlist']);
})->name('wishlist');

Route::get('/blog', function () {
    return view('pages.blog',  ['name' => 'Blog',  'head' => 'Blog']);
})->name('blog');

Route::get('/blog-details', function () {
    return view('pages.blog-details',  ['name' => 'Blog details',  'head' => 'Blog details']);
})->name('blog-details');
