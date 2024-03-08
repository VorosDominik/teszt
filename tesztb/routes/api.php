<?php

use App\Http\Controllers\BejegyzesekController;
use App\Http\Controllers\OsztalyController;
use App\Http\Controllers\TevekenysegekController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bejegyzesek', [BejegyzesekController::class, 'index']);
Route::get('/osztalyok', [OsztalyController::class, 'index']);

Route::get('/bejegyzesek', [TevekenysegekController::class, 'index']);
Route::get('/bejegyzesek/{id}', [BejegyzesekController::class, 'osztalyra']);