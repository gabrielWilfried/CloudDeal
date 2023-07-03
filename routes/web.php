<?php

use App\Http\Controllers\Guest\AnnonceGuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\NewsLetterController;
use App\Http\Controllers\Guest\ContactController;
use App\Http\Controllers\Authenticate\CommentaireController;
use App\Http\Controllers\Guest\SignalGuestController;


use App\Http\Controllers\Guest\AboutGuestController;
use App\Http\Controllers\Authenticate\DiscussionController;

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
Route::get('/ad-detail/{id}', [AnnonceGuestController::class, 'showAd'])->name('dashboard.singe-ad');


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
        Route::get('/ad-detail/{id}', [AnnonceGuestController::class, 'showAd'])->name('dashboard.singe-ad');
        Route::get('/ad-list', function () {
            return view('guest.layouts.pages.ad',  ['name' => 'Ad List',  'head' => 'Dashboard']);
        })->name('dashboard.ad-list');
        Route::prefix('search')->group(function () {
            Route::get('/{category_id}',[ AnnonceGuestController::class, 'search'])->name('search.category');
        });
    });
});

Route::get('/admin', function () {
    return view('admin.authentication.admin-home');
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

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('user.layouts.partials.dashboard',  ['name' => 'Dashboard',  'head' => 'Dashboard']);
    })->name('dashboard');
   
    Route::get('/ad-list', function () {
        return view('user.layouts.partials.ad-list',  ['name' => 'Ad List',  'head' => 'Dashboard']);
    })->name('dashboard.ad-list');
});

Route::get('/contact', function () {
    return view('user.layouts.partials.contact',  ['name' => 'Contact',  'head' => 'Contact Us']);
})->name('contact');

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
Route::post('/comments/annonces/{id}',[CommentaireController::class, 'store'] )->name('comments.store');
Route::post('/annonces/{id}/signaler', [SignalGuestController::class, 'signaleAnnonce'])->name('annonces.signaler');

