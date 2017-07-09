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

Route::get('faq', ['as' => 'faq', 'uses' => 'ContactUSController@faq']);
Route::get('testimonials', ['as' => 'faq', 'uses' => 'ContactUSController@testimonials']);

Route::get('team', ['as' => 'team', 'uses' => 'AboutUSController@team']);
Route::get('about', ['as' => 'about', 'uses' => 'AboutUSController@about']);

Route::get('services', ['as' => 'services', 'uses' => 'ServicesController@test']);

Route::get('gallery', ['as' => 'gallery', 'uses' => 'GalleryController@index']);

Route::get('services/surprises/birthday', 'ServicesController@birthday');