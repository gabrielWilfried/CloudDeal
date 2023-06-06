<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Authenticate\AnnonceController;
use App\Http\Controllers\Guest\AnnonceGuestController;
use App\Http\Controllers\API\VilleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'store']);
    Route::post('/password/forgot', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.forgot');

});

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('annonce')->group(function () {
    });

    Route::prefix('boost')->group(function () {
        Route::post('/', [BoostController::class, 'store']);
    });
});

Route::prefix('guest')->group(function () {
    Route::prefix('annonce')->group(function () {
        Route::get('/', [AnnonceGuestController::class, 'index']);
        Route::post('/', [AnnonceGuestController::class, 'store']);
        Route::get('/{id}', [AnnonceGuestController::class, 'view']);
        Route::put('/{id}', [AnnonceGuestController::class, 'update']);
        Route::delete('/{id}', [AnnonceGuestController::class, 'delete']);
    });
});



Route::group(['prefix' => 'api'], function () {
    Route::get('/town', [VilleController::class, 'index'])->name('api.Town.index');
    Route::post('/town', [VilleController::class, 'store'])->name('api.Town.store');
    Route::get('/towns/{id}', [VilleController::class, 'show'])->name('api.Town.show');
    Route::put('/town/{id}', [VilleController::class, 'update'])->name('api.Town.update');
    Route::delete('/town/{id}', [VilleController::class, 'destroy'])->name('api.Town.destroy');
});

