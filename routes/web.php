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

Route::get('services', function () {
    return view('services.index');
});

Route::get('gallery/images', function () {
    return view('gallery.images-list');
});

Route::get('gallery', function () {
    return view('gallery.index');
});

Route::get('services/surprises/birthday', function () {
    return view('services.surprises.birthday');
});

Route::get('services/surprises/anniversary', function () {
    return view('services.surprises.anniversary');
});

Route::get('services/surprises/proposal', function () {
    return view('services.surprises.proposal');
});

Route::get('services/surprises/get-well-soon', function () {
    return view('services.surprises.getwellsoon');
});

Route::get('services/surprises/bon-voyage', function () {
    return view('services.surprises.bonvoyage');
});

Route::get('services/destination', function () {
    return view('services.destination.destination');
});

Route::get('services/prank', function () {
    return view('services.prank.prank');
});

Route::get('services/delivery', function () {
    return view('services.delivery.delivery');
});
