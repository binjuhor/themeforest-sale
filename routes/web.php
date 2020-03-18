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

Route::get('/', function () {
    return 'Hello I\'m an assistant update <a href="/beautheme">our sales</a> from Themeforest.<br> Contact my boss binjuhor@gmail.com';
});
Route::get('/{author}', 'SaleController@show');

Auth::routes(['verify' => true]);


Route::get('/themeforest/{id}', 'SaleController@index');
