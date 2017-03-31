<?php

namespace App\Http\Controllers\search;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function getSearchView(){
    	$stations = DB::table('station')->pluck('name', 'station_id');
    	return view('search.search', ['jsonStations' => $stations]);
    }
}
