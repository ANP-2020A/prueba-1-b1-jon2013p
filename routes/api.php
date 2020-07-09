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
Route::get('user', 'UserController@getAuthenticatedUser');

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('product', 'ProductController@index');
Route::get('product/{product}', 'ProductController@show');

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::post('products', 'ProductController@store');
    Route::put('products/{product}', 'ProductController@update');
    Route::put('products/statusChange/{product}', 'ProductController@delete');
    Route::get('customers', 'CustomerController@index');
    Route::get('customers/{customer}', 'CustomerController@show');
    Route::post('customers', 'CustomerController@store');
    Route::put('customers/{customer}', 'CustomerController@update');
    Route::delete('customers/{customer}', 'CustomerController@delete');
});
