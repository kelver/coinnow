<?php

use Illuminate\Http\Request;

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

Route::get('v1/coins', 'API\CoinsController@allCoins');
Route::post('v1/coinBySigla', 'API\CoinsController@coinBySigla');
Route::post('v1/fechamentoBySigla', 'API\CoinsController@fechamentoBySigla');
Route::post('v1/getNews', 'API\NewsController@getNews');
