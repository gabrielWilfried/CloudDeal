<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Authenticate\AnnonceController;
use App\Http\Controllers\Guest\AnnonceGuestController;
use App\Http\Controllers\Auth\TownController;
use App\Http\Controllers\Auth\RegionController;
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

Route::prefix('/auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'store']);


    Route::get('/regions', [RegionController::class, 'index']);
    Route::post('/regions', [RegionController::class, 'store']);
    Route::get('/regions/{region}', [RegionController::class, 'show']);
    Route::put('/regions/{region}', [RegionController::class, 'update']);
    Route::delete('/regions/{region}', [RegionController::class, 'destroy']);



    Route::get('/towns', [TownController::class, 'index']);
    Route::post('/towns', [TownController::class, 'store']);
    Route::get('/towns/{town}', [TownController::class, 'show']);
    Route::put('/towns/{town}', [TownController::class, 'update']);
    Route::delete('/towns/{town}', [TownController::class, 'destroy']);

    Route::post('/discussions', [DiscussionController::class, 'create']);


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
        Route::get('/{id}/handle-reports', [AnnonceGuestController::class, 'handleSignals']);
        Route::post('/{id}/report', [AnnonceGuestController::class, 'signalAnnonce']);


    });
});



