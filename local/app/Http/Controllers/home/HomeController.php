<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getHomeView(){
    	$stations = DB::table('station')->pluck('name', 'station_id');
    	return view('home/home', ['jsonStations' => $stations]);
    }
    public function searchTrip(Request $request){
    	$string = '';
    	$string += $request->input('stationLeave');
    	$string += $request->input('stationArrive');
    	$string += $request->input('isRoundTrip');
    	$string += $request->input('dateLeave');
    	$string += $request->input('dateRound');
    	$string += $request->input('timeLeave');
    	$string += $request->input('timeRound');
    	return $request->input('stationLeave');
    }
}
