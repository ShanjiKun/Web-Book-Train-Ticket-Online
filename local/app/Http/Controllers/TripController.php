<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TripAddRequest;
use App\Train;
use App\Station;
use App\Trip;
class TripController extends Controller
{
    public function getTripAdd(){
    	$data = Train::select('train_id','name')->get()->toArray();
    	$data1 = Station::select('station_id','name')->get()->toArray();
    	return view('admin\trip\trip-add',['data' => $data, 'data1' =>$data1]);
    }
    public function postTripAdd(){
    	// $trip = new Trip;
    	// $trip -> name = $request -> txtStationName;
    	// $trip -> city = $request -> txtCity;
    	// $trip -> address = $request -> txtAddress;
    	// $trip -> distance = $request -> txtDistance;
    	// $trip -> save();
    	// return redirect()-> route('getTripList')->with(['flash_level' => 'result_msg','flash_message' => 'Thêm ga chuyến tàu thành công']);
    }
    // public function getTripList(){
    // 	$data = Trip::select('trip_id','train_id','station_leave_id','station_arrive_id','employee_id','date_leave','date_arrive')->get()->toArray();
    // 	return view('admin/trip/trip-list',['data' => $data]);
    // }
    
}
