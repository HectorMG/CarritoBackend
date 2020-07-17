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

Route::group([
    'middleware' => 'api'
], function ($router) {

    Route::post('login', 'api\AuthController@login');
    Route::post('signup', 'api\AuthController@signup');
    Route::post('logout', 'api\AuthController@logout');
    Route::post('refresh', 'api\AuthController@refresh');
    Route::post('me', 'api\AuthController@me');

});

Route::apiResource('products', 'api\ProductController');
Route::apiResource('productCart', 'api\ProductCartController');
Route::apiResource('stores','api\StoreController');
Route::get('buscar/{id}/cart/{id_cart}','api\ProductCartController@buscarVendido');
Route::delete('remove/{id}/cart/{id_cart}','api\ProductCartController@removeProduct')->middleware('CORS');

