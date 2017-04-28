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

//Crime collection routes
Route::get('/crimes', 'CrimeController@index');
Route::post('/crimes', 'CrimeController@create');

//Crime Singular routes
Route::get('/crimes/{id}', 'CrimeController@show');
Route::put('/crimes/{id}', 'CrimeController@update');
Route::delete('/crimes/{id}', 'CrimeController@destroy');
