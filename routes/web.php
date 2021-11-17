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

Route::get('/', 'MainController@home'); 

Route::get('/films', 'MainController@films'); 
Route::get('/births', 'MainController@births'); 
Route::get('/debts', 'GetFormController@debts'); 
Route::get('/another', 'MainController@another'); 

Route::post('/debts/check', 'GetFormController@form_check');
