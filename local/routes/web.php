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

Route::get('/', 'home\HomeController@getHomeView');
Route::get('/search', 'search\SearchController@getSearchView');
Route::get('/thongtindatcho', function(){
	return view('booking-information/booking-information');
});
Route::get('/kiemtrave', function(){
	return view('check-valid-ticket/check-valid-ticket');
});
Route::get('/giotau', function(){
	return view('timetable/timetable');
});
Route::get('/khuyenmai', function(){
	return view('promotions/promotions');
});
Route::get('/quydinh', function(){
	return view('terms-and-conditions/terms-and-conditions');
});
Route::get('/huongdan', function(){
	return view('how-to-buy/how-to-buy');
});
Route::get('/lienhe', function(){
	return view('contact/contact');
});

Route::group(['prefix'=>'admin'],function(){
	Route::get('admin-sign-in',function(){
		return view('admin/admin-sign-in');
	});
	Route::get('admin-sign-up',function(){
		return view('admin/admin-sign-up');
	});
	Route::get('admin-update', function(){
		return view('admin/admin-update');
	});
	Route::get('test', function(){
		return view('admin/test');
	});
	Route::get('admin-main', function(){
		return view('admin/admin-main');
	});
});

//
Route::post('search-trip', 'database\DatabaseController@searchTrip');
Route::post('get-train-name-via-trip', 'database\DatabaseController@getTrainNameViaTrip');
Route::post('get-train-time-via-station', 'database\DatabaseController@getTrainTimeViaStation');
Route::post('get-number-seat', 'database\DatabaseController@getNumberSeat');