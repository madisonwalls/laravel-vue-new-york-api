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


Route::get('/nightlifes', 'NightlifeController@index');
Route::post('/nightlifes', 'NightlifeController@create');

Route::get('/nightlifes/{id}', 'NightlifeController@show');
Route::put('/nightlifes/{id}', 'NightlifeController@update');
Route::delete('/nightlifes/{id}', 'NightlifeController@destroy');


Route::get('/', function () {
    return view('app');
});
