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

Route::post('/register', 'API\UserController@register');
Route::post('/login', 'API\UserController@login');
Route::get('/getcoupons', 'API\PromocodeController@index');
Route::post('/createcoupon','API\PromocodeController@create');
Route::post('/usecoupon','API\PromocodeController@useCoupon');
Route::get('/banners','API\BannerController@index');
Route::post('/createshopkeeper','API\ShopkeeperController@store');
//Route::get('articles','ArticleContoller@index');