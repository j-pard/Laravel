<?php

use Illuminate\Support\Facades\Route;

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

// Home
Route::get('/', 'RestaurantController@index');

Route::get('/show/{id}', 'RestaurantController@show');

Route::get('/create', 'RestaurantController@create');

Route::post('/create', 'RestaurantController@store');

Route::get('/edit/{id}', 'RestaurantController@edit');

Route::patch('/edit/{id}', 'RestaurantController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
