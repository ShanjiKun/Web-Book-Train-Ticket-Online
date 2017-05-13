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
		$user = DB::table('users')->where ([['level',1],['state','E']])->count();
		$user1 = DB::table('users')->where ([['level',2],['state','E']])->count();
		$user2 = DB::table('users')->where ([['level',0],['state','E']])->count();
		$station = DB::table('station')->where ('state','E')->count();
		$train = DB::table('train')->where ('state','E')->count();
		$trip = DB::table('trip')->where ('state','E')->count();
		$car = DB::table('car')->where ('state','E')->count();
   //      $num_users = DB::table('ticket_cart')
   //              ->select('type_passenger',DB::raw('count(*) as total'))
   //              ->groupBy('type_passenger')->get()->toArray();
   //              //->pluck('total','type_passenger')->all();
     
 		// $num_price = DB::table('ticket_cart')
			// 	->groupBy('type_passenger')
			// 	->selectRaw('sum(price) as sum,type_passenger')->get();
	   			//->pluck('sum','type_passenger');

		$num_users = DB::SELECT('SELECT type_passenger, count(type_passenger) as total, sum(cost) as totalCost FROM ticket_cart GROUP BY type_passenger');

   		$num_ticket_sold = DB::table('ticket_sold')->where('state','S')->count();
   		$num_ticket_wait = DB::table('ticket_sold')->where('state','W')->count();
               // return $num_price;
		return view('admin/dashboard/chart',['user' => $user, 'user1' => $user1,'user2' => $user2,'station'=>$station, 
											'train'=>$train, 'trip'=> $trip,'car' => $car,'num_users' => $num_users,'num_ticket_sold'=>$num_ticket_sold,'num_ticket_wait'=>$num_ticket_wait]);
	});
});

//
Route::get('login',['as' => 'getLogin','uses' => 'LoginController@getLogin']);
Route::post('login',['as' => 'postLogin','uses' => 'LoginController@postLogin']);
Route::get('sign-up',['as' => 'getLogin','uses' => 'LoginController@getSignUp']);
Route::post('sign-up',['as' => 'postLogin','uses' => 'LoginController@postSignUp']);
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
	return view('admin/dashboard/cate1');
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
Route::get('payment',['as' => 'getPayment' , 'uses' => 'PaymentController@getPayment']);
Route::post('payment',['as' => 'postPayment' , 'uses' => 'PaymentController@postPayment']);
Route::get('bill-list',['as' => 'getBillList' , 'uses' => 'PaymentController@getBillList']);
//payment
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
Route::get('refund', 'payment\PaymentController@getRefund');

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