<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Authenticate\AnnonceController;
use App\Http\Controllers\Guest\AnnonceGuestController;
use App\Http\Controllers\API\TownController;
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

    Route::group(['prefix' => 'api'], function () {
        Route::get('/towns', [TownController::class, 'index'])->name('api.Town.index');
        Route::post('/towns', [TownController::class, 'store'])->name('api.Town.store');
        Route::get('/towns/{id}', [TownController::class, 'show'])->name('api.Town.show');
        Route::put('/towns/{id}', [TownController::class, 'update'])->name('api.Town.update');
        Route::delete('/towns/{id}', [TownController::class, 'destroy'])->name('api.Town.destroy');
    });

    Route::group(['prefix' => 'api'], function () {
        Route::get('/regions', [RegionController::class, 'index'])->name('api.Region.index');
        Route::post('/regions', [RegionController::class, 'store'])->name('api.Region.store');
        Route::get('/regions/{id}', [RegionController::class, 'show'])->name('api.Region.show');
        Route::put('/regions/{id}', [RegionController::class, 'update'])->name('api.Region.update');
        Route::delete('/regions/{id}', [RegionController::class, 'destroy'])->name('api.Region.destroy');
    });
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
    });
});



