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
    return view('welcome');
});

Route::get('/main', 'MainController@index');
Route::post('/main/checkLogin', 'MainController@checkLogin');
Route::get('main/logout', 'MainController@logout');

Route::get('/main/gerant', 'MainController@gerant');
Route::get('/main/magasinier', 'MainController@magasinier');
Route::get('/main/secretaire', 'MainController@secretaire');
