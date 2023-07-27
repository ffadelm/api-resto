<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanansController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\KeranjangsController;
use App\Http\Controllers\BestProductsController;

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

Route::apiResource('best-products', BestProductsController::class);
Route::apiResource('keranjangs', KeranjangsController::class);
Route::apiResource('products', ProductsController::class);
Route::apiResource('pesanans', PesanansController::class);
