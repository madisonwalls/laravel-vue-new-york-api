<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('app');
});


Route::get('/restaurants', 'RestaurantController@index');
Route::post('/restaurants', 'RestaurantController@create');
Route::get('/restaurants/{id}', 'RestaurantController@show');
Route::put('/restaurants/{id}', 'RestaurantController@update');
Route::delete('/restaurants/{id}', 'RestaurantController@destroy');
