<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Authenticate\AnnonceController;
use App\Http\Controllers\Authenticate\BoostController;
use App\Http\Controllers\Authenticate\DiscussionController;
use App\Http\Controllers\Guest\AnnonceGuestController;
use App\Http\Controllers\Authenticate\RegionController;
use App\Http\Controllers\Authenticate\VilleController;
use App\Http\Controllers\Guest\RegionGuestController;
use App\Http\Controllers\Guest\VilleGuestController;
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
    Route::post('boost/{annonce}', [BoostController::class, 'store']);

    Route::post('commentaires/{annonce}', [CommentaireController::class, 'store']);

    Route::prefix('annonce')->group(function () {
        Route::get('/', [AnnonceController::class, 'index']);
        Route::post('/', [AnnonceController::class, 'store']);
        Route::get('/{annonce}', [AnnonceController::class, 'view']);
        Route::put('/{annonce}', [AnnonceController::class, 'update']);
        Route::delete('/{annonce}', [AnnonceController::class, 'delete']);
    });

    Route::prefix('region')->group(function () {
        Route::post('/', [RegionController::class, 'store']);
        Route::put('/{region}', [RegionController::class, 'update']);
        Route::delete('/{region}', [RegionController::class, 'delete']);
    });

    Route::prefix('town')->group(function () {
        Route::post('/', [VilleController::class, 'store']);
        Route::put('/{town}', [VilleController::class, 'update']);
        Route::delete('/{town}', [VilleController::class, 'delete']);
    });
    Route::prefix('/discussion')->group(function () {
        Route::post('/{annonce}', [DiscussionController::class, 'store']);
    });
});

//route for guest mode
Route::prefix('guest')->group(function () {
    Route::prefix('annonce')->group(function () {
        Route::get('/', [AnnonceGuestController::class, 'listAnnonces']);
        Route::get('/{annonce}', [AnnonceGuestController::class, 'detailsAnnonce']);
    });
    Route::get('region/', [RegionGuestController::class, 'listRegions']);
    Route::get('town/', [VilleGuestController::class, 'listVilles']);
});
