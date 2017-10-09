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
    return view('pages.home');
});

Route::get('/news', function () {
    return view('pages.news');
});

Route::get('/aboutus', function () {
    return view('pages.aboutus');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tour', 'TourController@index')->name('tour');
Route::post('/tour','TourController@store')->name('tour.store');

Route::get('/test','HomeController@test');
Route::get('/test_router','HomeController@router_test');
Route::get('/admin', 'HomeController@admin');
Route::get('/route/place' , 'RouteController@routePlaces');
Route::get('/events' , 'HomeController@eventsMange');

