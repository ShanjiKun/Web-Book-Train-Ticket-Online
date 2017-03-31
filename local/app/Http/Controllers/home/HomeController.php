<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getHomeView(){
    	$stations = DB::table('station')->pluck('name', 'station_id');
    	return view('home.home', ['jsonStations' => $stations]);
    }
}
