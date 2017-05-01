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
	Route::get('admin-master', function(){
		return view('admin/dashboard/main');
	});
	Route::get('dashboard/cate', function(){
		return view('admin/dashboard/cate');
	});
	Route::get('dashboard/chart', function(){
		$user = DB::table('employee')->count();
		$station = DB::table('station')->count();
		$train = DB::table('train')->count();
		return view('admin/dashboard/chart',['user' => $user, 'station'=>$station, 'train'=>$train]);
	});
});

//
Route::get('admin/login',['as' => 'getLogin','uses' => 'LoginController@getLogin']);
Route::post('admin/login',['as' => 'postLogin','uses' => 'LoginController@postLogin']);
Route::get('logout',['as' => 'getLogout','uses' => 'LoginController@getLogout']);
Route::get('admin',['as' => 'admin', function(){
	if(!Auth::check()){
            return view('admin\Login\login');
        }
        else{
            return view('admin/dashboard/main');
        }
        
	
}]);
Route::get('admin1',['as' => 'admin1', function(){
	return view('admin/dashboard/cate');
}]);
//login
Route::get('employee_add',['as' => 'getEmployeeAdd' , 'uses' => 'EmployeeController@getEmployeeAdd']);
Route::post('employee_add',['as' => 'postEmployeeAdd' , 'uses' => 'EmployeeController@postEmployeeAdd']);
Route::get('employee_list',['as' => 'getEmployeeList' , 'uses' => 'EmployeeController@getEmployeeList']);
Route::get('employee_update/{id}',['as' => 'getEmployeeDelete' , 'uses' => 'EmployeeController@getEmployeeDelete']);
Route::get('employee-edit/{id}',['as' => 'getEmployeeEdit' , 'uses' => 'EmployeeController@getEmployeeEdit']);
Route::post('employee-edit/{id}',['as' => 'postEmployeeEdit' , 'uses' => 'EmployeeController@postEmployeeEdit']);
//Employee
Route::get('train-add',['as' => 'getTrainAdd' , 'uses' => 'TrainController@getTrainAdd']);
Route::post('train-add',['as' => 'postTrainAdd' , 'uses' => 'TrainController@postTrainAdd']);
Route::get('train-list',['as' => 'getTrainList' , 'uses' => 'TrainController@getTrainList']);
Route::get('train-update/{id}',['as' => 'getTrainDelete' , 'uses' => 'TrainController@getTrainDelete']);
Route::get('train-edit/{id}',['as' => 'getTrainEdit' , 'uses' => 'TrainController@getTrainEdit']);
Route::post('train-edit/{id}',['as' => 'postTrainEdit' , 'uses' => 'TrainController@postTrainEdit']);
//Train
Route::get('station-add',['as' => 'getStationAdd' , 'uses' => 'StationController@getStationAdd']);
Route::post('station-add',['as' => 'postStationAdd' , 'uses' => 'StationController@postStationAdd']);
Route::get('station-list',['as' => 'getStationList' , 'uses' => 'StationController@getStationList']);
Route::get('station-delete/{id}',['as' => 'getStationDelete' , 'uses' => 'StationController@getStationDelete'])->where('id', '[0-9]+');
Route::get('station-edit/{id}',['as' => 'getStationEdit' , 'uses' => 'StationController@getStationEdit']);
Route::post('station-edit/{id}',['as' => 'postStationEdit' , 'uses' => 'StationController@postStationEdit']);
//Station
Route::get('trip-add',['as' => 'getTripAdd' , 'uses' => 'TripController@getTripAdd']);
Route::post('trip-add',['as' => 'postTripAdd' , 'uses' => 'TripController@postTripAdd']);
Route::get('trip-list',['as' => 'getTripList' , 'uses' => 'TripController@getTripList']);
// Trip
//*****
// Route::group(['prefix' => 'admin'], function(){
// 	Route::group(['prefix' => 'employee'],function(){
// 		Route::get('employee_add',['as' => 'getEmployeeAdd' , 'uses' => 'EmployeeController@getEmployeeAdd']);
// 		Route::post('employee_add',['as' => 'postEmployeeAdd' , 'uses' => 'EmployeeController@postEmployeeAdd']);
// 	});
// });

// Route::group(['middleware'=>'auth'], function(){
//***** chua xu ly dc middleware <- không có Authenticate.php <- return redirect()->guest('login')

//Database request
Route::post('search-trip', 'database\DatabaseController@searchTrip');
Route::post('get-train-name-via-trip', 'database\DatabaseController@getTrainNameViaTrip');
Route::post('get-train-time-via-station', 'database\DatabaseController@getTrainTimeViaStation');
Route::post('get-number-seat', 'database\DatabaseController@getNumberSeat');
Route::post('get-cars', 'database\DatabaseController@getCars');
Route::post('get-seat', 'database\DatabaseController@getSeat');
Route::post('pick-seat', 'database\DatabaseController@pickSeat');
//Database request