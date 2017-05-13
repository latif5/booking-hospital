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

Auth::routes();

Route::group(['prefix'=>'admin'], function(){
	Route::get('','AdminController@dashboard');
	Route::get('/profile','AdminController@profile');
	Route::get('/profile/edit','AdminController@edit');
	Route::post('/profile/edit','AdminController@update');
});

Route::group(['prefix'=>'schedule'], function(){
	Route::get('','ScheduleController@show');
	Route::get('add-schedule','ScheduleController@create');
	Route::post('add-schedule','ScheduleController@store');
	Route::get('booking','ScheduleController@showBooking');
});

Route::group(['prefix'=>'poly'], function(){
	Route::get('','PolyController@show');
	Route::get('add-poly','PolyController@create');
	Route::post('add-poly','PolyController@store');
});

Route::group(['prefix'=>'report'], function(){
	Route::get('','ReportController@show');
});