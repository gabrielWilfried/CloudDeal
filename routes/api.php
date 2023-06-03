<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Authenticate\AnnonceController;
use App\Http\Controllers\Guest\AnnonceGuestController;
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
});

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('annonce')->group(function () {
        Route::get('/', [AnnonceController::class, 'index']);
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
