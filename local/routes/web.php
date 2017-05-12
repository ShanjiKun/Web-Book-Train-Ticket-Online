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

Route::get('/', ['as' => '/', 'uses' => 'home\HomeController@getHomeView']);
Route::get('/search', ['as' => 'search', 'uses' => 'search\SearchController@getSearchView']);

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
Route::get('login',['as' => 'getLogin','uses' => 'LoginController@getLogin']);
Route::post('login',['as' => 'postLogin','uses' => 'LoginController@postLogin']);
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
Route::get('user_list',['as' => 'getUserList' , 'uses' => 'EmployeeController@getUserList']);
Route::get('user_update/{id}',['as' => 'getUserDelete' , 'uses' => 'EmployeeController@getUserDelete']);
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
Route::get('trip-update/{id}',['as' => 'getTripDelete' , 'uses' => 'TripController@getTripDelete']);
Route::get('trip-edit/{id}',['as' => 'getTripEdit' , 'uses' => 'TripController@getTripEdit']);
Route::post('trip-edit/{id}',['as' => 'postTripEdit' , 'uses' => 'TripController@postTripEdit']);
// Trip
Route::get('car-add',['as' => 'getCarAdd' , 'uses' => 'CarController@getCarAdd']);
Route::post('car-add',['as' => 'postCarAdd' , 'uses' => 'CarController@postCarAdd']);
Route::get('car-list',['as' => 'getCarList' , 'uses' => 'CarController@getCarList']);
Route::get('car-update/{id}',['as' => 'getCarDelete' , 'uses' => 'CarController@getCarDelete']);
Route::get('car-edit/{id}',['as' => 'getCarEdit' , 'uses' => 'CarController@getCarEdit']);
Route::post('car-edit/{id}',['as' => 'postCarEdit' , 'uses' => 'CarController@postCarEdit']);
//Car
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
Route::post('unpickSeat', 'database\DatabaseController@unpickSeat');

Route::get('getCost', 'database\DatabaseController@getCost');
Route::get('getOwnTime', 'database\DatabaseController@getOwnTime');
Route::get('getWaitSeats', 'database\DatabaseController@getWaitSeats');

Route::get('passenger-information', 'payment\PaymentController@getPassengerInfo');
Route::post('updatePassengerInfo', 'payment\PaymentController@updatePassengerInfo');

Route::get('verify-info', 'payment\PaymentController@getVerifyInfo');
Route::get('backToPassengetInfo', 'payment\PaymentController@backToPassengetInfo');

Route::get('accepted-payment', 'payment\PaymentController@handlePayment');
Route::get('payment-later', 'payment\PaymentController@getPaymentLater');
Route::get('payment-online', 'payment\PaymentController@getPaymentOnline');
Route::post('payment-online', 'payment\PaymentController@postPaymentOnline');
Route::get('payment-success', 'payment\PaymentController@getPaymentSuccess');

Route::get('download-ticket', 'payment\PaymentController@downloadTicket');
//
Route::post('postOwnTime', 'database\DatabaseController@postOwnTime');
Route::post('postOwnTime24H', 'database\DatabaseController@postOwnTime24H');
Route::post('postBillOwnTime', 'database\DatabaseController@postBillOwnTime');
//
//
Route::get('my-tickets', 'user\MyTicketsController@getView');
//
//Database request
//Normal user
Route::post('getUser', 'LoginController@getUser');
//Normal user