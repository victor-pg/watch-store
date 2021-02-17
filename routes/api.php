<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/watches',"App\Http\Controllers\Api\WatchesController@getWatches");
Route::get('/watch/{id}',"App\Http\Controllers\Api\WatchesController@getWatch");
Route::get('/cart',"App\Http\Controllers\Api\CartController@getWatchesFromCart");
Route::post('/add-to-cart/{id}',"App\Http\Controllers\Api\CartController@addWatchToCart");
Route::delete('/remove-from-cart/{id}',"App\Http\Controllers\Api\CartController@removeWatchFromCart");
