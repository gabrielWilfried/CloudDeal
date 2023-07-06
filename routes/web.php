<?php

use App\Http\Controllers\Authenticate\AnnonceController;
use App\Http\Controllers\Authenticate\BoostController;
use App\Http\Controllers\Authenticate\CategoryController;
use App\Http\Controllers\Guest\AnnonceGuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\NewsLetterController;
use App\Http\Controllers\Guest\ContactController;


use App\Http\Controllers\Guest\AboutGuestController;
use App\Http\Controllers\Authenticate\DiscussionController;
use App\Http\Controllers\Authenticate\VilleController;
use Faker\Guesser\Name;

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

Route::prefix('clouddeal')->group(function () {
    //routes guest mode
    Route::get('/', [HomeController::class, "index"])->name('home');
    Route::post('/', [NewsLetterController::class, "store"])->name('home');
    Route::get('/ads', [HomeController::class, "paginatedAds"]);
    Route::get('/wishlist', function () {
        return view('guest.layouts.pages.wishlist',  ['name' => 'Wishlist',  'head' => 'Wishlist']);
    })->name('wishlist');
    Route::get('/about', [AboutGuestController::class, "index"])->name('about');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::prefix('allAds')->group(function () {
        Route::get('/', [AnnonceGuestController::class, 'index'])->name('dashboard.index');
        Route::get('/ads', [AnnonceGuestController::class, 'paginatedAds'])->name('dashboard.ads');
        Route::get('/search', [AnnonceGuestController::class, 'index'])->name('dashboard.category');
        Route::get('/ad-detail/{id}', [AnnonceGuestController::class, 'showAd'])->name('dashboard.singe-ad');
        Route::get('/ad-list', function () {
            return view('guest.layouts.pages.ad',  ['name' => 'Ad List',  'head' => 'Dashboard']);
        })->name('dashboard.ad-list');
        Route::prefix('search')->group(function () {
            Route::get('/', [AnnonceGuestController::class, 'search']);
            Route::get('/category/{listId}', [AnnonceGuestController::class, 'search'])->name('search.category');
        });
    });
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.authentication.admin-home');
    })->name('home');
    Route::prefix('myads')->name('ads.')->group(function () {
        Route::get('/', [AnnonceController::class, 'index'])->name('index');
        Route::get('/ads', [AnnonceController::class, 'paginatedAds']);
        Route::get('/create', [AnnonceController::class, 'create'])->name('create');
        Route::get('/edit/{annonce}', [AnnonceController::class, 'edit'])->name('edit');
        Route::post('/store', [AnnonceController::class, 'store'])->name('store');
        Route::post('/update/{annonce}', [AnnonceController::class, 'update'])->name('update');
        Route::delete('/delete/{annonce}', [AnnonceController::class, 'delete'])->name('delete');
        Route::get('/{annonce}/detail', [AnnonceController::class, 'detail'])->name('detail');
        Route::put('/block/{annonce}', [AnnonceController::class, 'block'])->name('block');
        Route::put('/boost/{annonce}', [BoostController::class, 'store'])->name('boost');
    });
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/category', [CategoryController::class, 'categories']);
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::put('/update/{category}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/delete/{category}', [CategoryController::class, 'delete'])->name('delete');
    });
    Route::prefix('town')->name('town.')->group(function () {
        Route::get('/', [VilleController::class, 'index'])->name('index');
        Route::get('/category', [VilleController::class, 'towns']);
        Route::post('/store', [VilleController::class, 'store'])->name('store');
        Route::put('/update/{town}', [VilleController::class, 'update'])->name('update');
        Route::delete('/delete/{town}', [VilleController::class, 'delete'])->name('delete');
        Route::put('/boost', [AnnonceController::class, 'boost'])->name('boost');
    });
});


Route::prefix('auth')->group(function () {
    Route::get('/login', function () {
        return view("guest.auth.login", ['name' => 'Login', 'head' => 'Account']);
    })->name("auth.login");
    Route::get('/register', function () {
        return view("guest.auth.register", ['name' => 'Register', 'head' => 'Account']);
    })->name("auth.register");
    Route::get('/forgot-password', function () {
        return view("guest.auth.forgot-password", ['name' => 'Forgot-password', 'head' => 'Account']);
    })->name("auth.forgot-password");
    Route::get('/reset-password', function () {
        return view("guest.auth.reset-password", ['name' => 'Reset-password', 'head' => 'Account']);
    })->name("auth.reset-password");
    Route::get('/verify-email', function () {
        return view("guest.auth.email-verification", ['name' => 'Verify-Email', 'head' => 'Account']);
    })->name("auth.verify-email");
});


Route::get('/about', [AboutGuestController::class, "index"])->name('about');

Route::get('/payment', function () {
    return view('guest.layouts.partials.payment',  ['name' => 'Payment',  'head' => 'Payment']);
})->name('payment');


Route::get('/wishlist', function () {
    return view('user.layouts.partials.wishlist',  ['name' => 'Wishlist',  'head' => 'Wishlist']);
})->name('wishlist');


Route::name('chat.')->prefix('chat')->group(function () {
    Route::get('/', [DiscussionController::class, 'index'])->name('index');
    Route::get('{annonce}', [DiscussionController::class, 'ListDiscussion']);
});

Route::post('/discussions/{annonce}', [DiscussionController::class, 'store'])->name('discussions.store');
Route::get('/discussions/{discussion}', [DiscussionController::class, 'view'])->name('discussions.view');
//Route::put('/discussions/{discussion}', [DiscussionController::class, 'update'])->name('discussions.update');
//Route::delete('/discussions/{discussion}', [DiscussionController::class, 'delete'])->name('discussions.delete');

Route::post('/message', [MessageController::class, 'store'])->name('messages.store');
