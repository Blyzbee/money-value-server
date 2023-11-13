<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversionController;

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


// Check si l'API fonctionne
Route::get('/status', function () {
    return [ConversionController::class, 'status'];
});

// Récupère la liste des paires de conversion
Route::get('/pairs', [ConversionController::class, 'pairs']);

// Converti une devise en une autre
Route::post('/convert', [ConversionController::class, 'convert']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
