<?php

use App\Http\Controllers\API\ProductsAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products', [ProductsAPI::class, 'index']);
Route::get('/products/{id}', [ProductsAPI::class, 'show']);

Route::post('/products', [ProductsAPI::class, 'store']);
Route::post('/products/{id}', [ProductsAPI::class, 'update']);

Route::delete('/products/{id}', [ProductsAPI::class, 'destroy']);
