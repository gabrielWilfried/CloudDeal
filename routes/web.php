<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\AboutGuestController;

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


Route::get('/admin', function () {
    return view('admin.authentication.admin-home');
});

Route::get('/', [HomeController::class, "index"])->name('home');


Route::prefix('auth')->group(function () {
    Route::get('/login', function () {
        return view("user.auth.login", ['name' => 'Login', 'head' => 'Account']);
    })->name("auth.login");
    Route::get('/register', function () {
        return view("user.auth.register", ['name' => 'Register', 'head' => 'Account']);
    })->name("auth.register");
    Route::get('/forgot-password', function () {
        return view("user.auth.forgot-password", ['name' => 'Forgot-password', 'head' => 'Account']);
    })->name("auth.forgot-password");
    Route::get('/reset-password', function () {
        return view("user.auth.reset-password", ['name' => 'Reset-password', 'head' => 'Account']);
    })->name("auth.reset-password");
    Route::get('/verify-email', function () {
        return view("user.auth.email-verification", ['name' => 'Verify-Email', 'head' => 'Account']);
    })->name("auth.verify-email");
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('user.layouts.partials.dashboard',  ['name' => 'Dashboard',  'head' => 'Dashboard']);
    })->name('dashboard');
    Route::get('/ad-detail', function () {
        return view('user.layouts.partials.single-ad',  ['name' => 'Ad Detail',  'head' => 'Dashboard']);
    })->name('dashboard.singe-ad');
    Route::get('/ad-list', function () {
        return view('user.layouts.partials.ad-list',  ['name' => 'Ad List',  'head' => 'Dashboard']);
    })->name('dashboard.ad-list');
});

Route::get('/contact', function () {
    return view('user.layouts.partials.contact',  ['name' => 'Contact',  'head' => 'Contact Us']);
})->name('contact');

Route::get('/about', [AboutGuestController::class, "index"])->name('about');

Route::get('/payment', function () {
    return view('user.layouts.partials.payment',  ['name' => 'Payment',  'head' => 'Payment']);
})->name('payment');

Route::get('/wishlist', function () {
    return view('user.layouts.partials.wishlist',  ['name' => 'Wishlist',  'head' => 'Wishlist']);
})->name('wishlist');

Route::get('/blog', function () {
    return view('user.layouts.partials.blog.blog',  ['name' => 'Blog',  'head' => 'Blog']);
})->name('blog');

Route::get('/blog-details', function () {
    return view('user.layouts.partials.blog.blog-details',  ['name' => 'Blog details',  'head' => 'Blog details']);
})->name('blog-details');
Route::get('/chat', function () {
    return view('user.layouts.partials.chat',  ['name' => 'Chat',  'head' => 'Chat']);
})->name('chat');
