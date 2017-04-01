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
    return view('index');
});

Route::get('contact', ['as' => 'contact', 'uses' => 'ContactUSController@create']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'ContactUSController@store']);

Route::get('about', ['as' => 'about', 'uses' => 'AboutUSController@about']);

Route::get('services', ['as' => 'services', 'uses' => 'ServicesController@index']);

Route::get('services/surprises', ['as' => 'services', 'uses' => 'ServicesController@surprises']);