<?php

use Illuminate\Http\Request;
use App\Products;
use App\Customer;

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


Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

Route::get('product', 'ProductController@index');
    Route::get('product/{product}', 'ProductController@show');
    Route::post('product', 'ProductController@store');
    Route::put('product/{product}', 'ProductController@update');
    Route::delete('product/{product}', 'ProductController@delete');

Route::get('customer', 'CustomerController@index');
Route::get('customer/{customer}', 'CustomerController@show');
Route::post('customer', 'CustomerController@store');
Route::put('customer/{customer}', 'CustomerController@update');
Route::delete('customer/{customer}', 'CustomerController@delete');
