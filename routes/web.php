<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Authenticate\AnnonceController;
use App\Http\Controllers\Authenticate\BoostController;
use App\Http\Controllers\Authenticate\CategoryController;
use App\Http\Controllers\Guest\AnnonceGuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\NewsLetterController;
use App\Http\Controllers\Guest\ContactController;
use App\Http\Controllers\Authenticate\CommentaireController;
use App\Http\Controllers\Guest\SignalGuestController;


use App\Http\Controllers\Guest\AboutGuestController;
use App\Http\Controllers\Authenticate\DiscussionController;
use App\Http\Controllers\Authenticate\PaymentController;
use App\Http\Controllers\Authenticate\VilleController;
use App\Http\Controllers\Authenticate\MessageController;
use App\Http\Controllers\Authenticate\HomeAuthenticateController;
use App\Http\Controllers\Authenticate\LetterController;
use App\Http\Controllers\Authenticate\ProfileController;
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

    Route::get('/contact', function () {
        return view('guest.layouts.pages.contact',  ['name' => 'Contact',  'head' => 'Contact Us']);
    })->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::prefix('allAds')->group(function () {
        Route::get('/', [AnnonceGuestController::class, 'index'])->name('dashboard.index');
        Route::get('/ads', [AnnonceGuestController::class, 'paginatedAds'])->name('dashboard.ads');
        Route::get('/search', [AnnonceGuestController::class, 'index'])->name('dashboard.category');
        Route::get('/ad-detail/{id}', [AnnonceGuestController::class, 'showAd'])->middleware('auth')->name('dashboard.singe-ad');
        Route::get('/ad-list', function () {
            return view('guest.layouts.pages.ad',  ['name' => 'Ad List',  'head' => 'Dashboard']);
        })->name('dashboard.ad-list');
        Route::prefix('search')->group(function () {
            Route::get('/', [AnnonceGuestController::class, 'search']);
            Route::get('/category/{listId}', [AnnonceGuestController::class, 'search'])->name('search.category');
        });
    });
});
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/', [HomeAuthenticateController::class, 'index'])->name('home');

    Route::prefix('myads')->name('ads.')->group(function () {
        Route::get('/', [AnnonceController::class, 'index'])->name('index');
        Route::get('/ads', [AnnonceController::class, 'paginatedAds']);
        Route::get('/create', [AnnonceController::class, 'create'])->name('create');
        Route::get('/edit/{annonce}', [AnnonceController::class, 'edit'])->name('edit');
        Route::post('/store', [AnnonceController::class, 'store'])->name('store');
        Route::put('/update/{annonce}', [AnnonceController::class, 'update'])->name('update');
        Route::delete('/delete/{annonce}', [AnnonceController::class, 'delete'])->name('delete');
        Route::get('/{annonce}/detail', [AnnonceController::class, 'detail'])->name('detail');
        Route::post('/{annonce}/checkout', [AnnonceController::class, 'checkout'])->name('checkout');
        Route::put('/block/{annonce}', [AnnonceController::class, 'block'])->name('block');
        Route::put('/boost/{annonce}', [BoostController::class, 'store'])->name('boost');
        Route::put('/verify/{annonce}', [AnnonceController::class, 'verify'])->name('verify');
    });
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::delete('/delete/{category}', [CategoryController::class, 'delete'])->name('delete');
    });
    Route::prefix('town')->name('town.')->group(function () {
        Route::get('/', [VilleController::class, 'index'])->name('index');
        Route::post('/store', [VilleController::class, 'store'])->name('store');
        Route::delete('/delete/{town}', [VilleController::class, 'delete'])->name('delete');
    });

        Route::prefix('mypayments')->name('payments.')->middleware('auth')->group(function () {
            Route::get('/', [PaymentController::class, 'index'])->name('index');
            Route::get('/approvePayment/{annonce}', [PaymentController::class, 'approvePayment'])->name('approve');
            Route::get('/cancelPayment/{annonce}', [PaymentController::class, 'cancelPayment'])->name('cancel');
        });


    Route::name('stripe.')->prefix('stripe')->group(function(){
        Route::get('/', [StripePaymentController::class,'index'])->name('index');
        Route::post('/checkout', [StripePaymentController::class,'store'])->name('checkout');
        Route::get('/success/{annonce}', [StripePaymentController::class,'success'])->name('checkout.success');
        Route::get('/cancel/{annonce}', [StripePaymentController::class,'cancel'])->name('checkout.cancel');
    });
    Route::prefix('mymessages')->name('messages.')->group(function () {
        Route::get('/', [MessageController::class, 'index'])->name('index');
        Route::get('/markAsRead/{id}', [MessageController::class, 'markAsRead'])->name('markAsRead');
    });

    Route::prefix('myletters')->name('letters.')->group(function () {
        Route::get('/', [LetterController::class, 'show'])->name('show');
    });

    Route::prefix('myprofile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'show'])->name('show');
        Route::post('/editpassword', [ProfileController::class, 'editPasswd'])->name('editPasswd');
        Route::post('/editprofile', [ProfileController::class, 'editProfile'])->name('editProfile');
        //Route::get('/editpasswdform', [ProfileController::class, 'editPasswdForm'])->name('editPasswdForm');
    });
});

Route::name('auth.')->prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'LoginView'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/register', [AuthController::class, 'RegisterView'])->name('register');
    Route::get('/login/modal', [AuthController::class, 'showLoginModal'])->name('login.modal');
    Route::get('/forgot-password', function () {
        return view("guest.auth.forgot-password", ['name' => 'Forgot-password', 'head' => 'Account']);
    })->name("forgot-password");
    Route::get('/reset-password', function () {
        return view("guest.auth.reset-password", ['name' => 'Reset-password', 'head' => 'Account']);
    })->name("reset-password");
    Route::get('/verify-email', function () {
        return view("guest.auth.email-verification", ['name' => 'Verify-Email', 'head' => 'Account']);
    })->name("auth.verify-email");

    Route::post('/auth/login', [AuthController::class, 'login'])->name('login.auth');
    Route::post('/register', [AuthController::class, 'store'])->name('register.auth');

    // Redirection vers l'authentification Google
    Route::get('/google', [AuthController::class, 'redirectToGoogle'])->name('google');

    // Callback après l'authentification Google
    Route::get('/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');
    });


    Route::prefix('dashboard')->middleware('auth')->group(function () {
        Route::get('/', function () {
            return view('user.layouts.partials.dashboard',  ['name' => 'Dashboard',  'head' => 'Dashboard']);
        })->name('dashboard');

        Route::get('/ad-list', function () {
            return view('user.layouts.partials.ad-list',  ['name' => 'Ad List',  'head' => 'Dashboard']);
        })->name('dashboard.ad-list');
    });




    Route::get('/wishlist', function () {
        return view('user.layouts.partials.wishlist',  ['name' => 'Wishlist',  'head' => 'Wishlist']);
    })->name('wishlist');


    Route::name('chat.')->prefix('chat')->middleware('auth')->group(function () {
        Route::get('/', [DiscussionController::class, 'index'])->name('index');
        Route::get('{annonce}', [DiscussionController::class, 'ListDiscussion']);
        Route::get('/messages/{discussion}', [DiscussionController::class, 'getMessages']);
        Route::post('/messages/send/{discussion}', [DiscussionController::class, 'createMessage']);

    });


    //Route::post('/comments/annonces/{id}',[CommentaireController::class, 'store'] )->name('comments.store');
    Route::post('/annonces/{id}/signaler', [SignalGuestController::class, 'signaleAnnonce'])->middleware('auth')->name('annonces.signaler');
    Route::get('/comments/{id}', [CommentaireController::class, 'listcomment']);
    Route::post('/comments/comment/{ad}',[CommentaireController::class, 'store'])->name('comments.store');

    //laravel gate
