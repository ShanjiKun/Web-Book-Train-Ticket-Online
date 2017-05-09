<?php

namespace App\Http\Controllers\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Utils\Utils;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\database\DatabaseController;

class PaymentController extends Controller
{
    public function getPassengerInfo(){
    	if(!Auth::check()){
    		return redirect()->route('search');
    	}
    	$waitSeatsJson = DatabaseController::getWaitSeatsInfo();

    	$waitSeats = json_decode($waitSeatsJson);
    	if(count($waitSeats) == 0) return redirect()->route('search');

    	$typePassenger = DB::select('select * from type_passenger');
    	return view('passenger-information\passenger-information', ["waitSeats" => $waitSeats, 'typePassenger' => $typePassenger]);
    }

    public function updatePassengerInfo(Request $request){

    	//{"seatsInfo":[{"seatInfoID":"13-1-1-5","fullName":"s","ID":"s","typePass":"HSSV"},{"seatInfoID":"14-1-1-5","fullName":"s","ID":"s","typePass":"NL"},{"seatInfoID":"15-1-1-5","fullName":"s","ID":"s","typePass":"TE"}],"payment":"1"}
    	$json = $request->data;
    	$data = json_decode($json);
    	$seatsInfo = $data->seatsInfo;

    	$waitSeatsJson = DatabaseController::getWaitSeatsInfo();
    	$waitSeats = json_decode($waitSeatsJson);

    	$test = '';
    	foreach ($waitSeats as $ws) {
			
			$siID = $ws->ticketID.'-'.$ws->tripID.'-'.$ws->stationIDLeave.'-'.$ws->stationIDArrive;
			$seatInfo;
    		foreach ($seatsInfo as $si) {
    			if($siID == $si->seatInfoID){
    				$seatInfo = $si;
    				break;
    			}
    		}
    		
    		$dateSell = date("Y-m-d");
    		$ticketCartID = $siID.'-'.$dateSell;
    		
    		$cardDateID = $seatInfo->ID;
    		$name = $seatInfo->fullName;

    		$typePassenger = DB::select('select name, discount from type_passenger where type_passenger_id = "'.$seatInfo->typePass.'"')[0];
    		$typePassName = $typePassenger->name;
    		$discount = $typePassenger->discount;

    		$ticketInfo = $ws->trainName.' '.$ws->slName.'-'.$ws->saName.' '.$ws->dateLeave.' '.$ws->typeSeat.' toa '.$ws->carOrdinal.' cho  '.$ws->seatOrdinal;
    		$price = DatabaseController::simCost();

    		$cost = $price - $discount;
    		$dateSell = date("Y-m-d");

    		DB::table('ticket_cart')->insert([
    			"ticket_cart_id" => $ticketCartID,
    			"card_date_id" => $cardDateID,
    			"name" => $name,
    			"type_passenger" => $typePassName,
    			"ticket_information" => $ticketInfo,
    			"price" => $price,
    			"discount" => $discount,
    			"cost" => $cost,
    			"date_sell" => $dateSell
    		]);

    		$query = '';
    		if($data->payment == 1){
    			$query = "UPDATE ticket_sold SET ticket_cart_id = '".$ticketCartID."', state = 'S' WHERE trip_id = ".$ws->tripID." AND ticket_id = ".$ws->ticketID." AND station_leave_id = ".$ws->stationIDLeave." AND station_arrive_id=".$ws->stationIDArrive;
    		}else{
    			$time = 86400; //Time of a day
    			$time = 100;
    			$query = "UPDATE ticket_sold SET own_time = '".$time."', ticket_cart_id = '".$ticketCartID."', state = 'S' WHERE trip_id = ".$ws->tripID." AND ticket_id = ".$ws->ticketID." AND station_leave_id = ".$ws->stationIDLeave." AND station_arrive_id=".$ws->stationIDArrive;
    		}
            DB::select($query);
    	}
    	return Utils::createResponse( 0, '"done"');
    }

    public function getVerifyInfo(Request $request){

    	if(!Auth::check()){
    		return redirect()->route('search');
    	}

    	$payTypeID = $request->payType;

    	$userID = Auth::User()->user_id;
        $query = "SELECT ticket_cart_id, own_time FROM ticket_sold WHERE user_id = ".$userID." AND state = 'S' AND own_time > 0";
        $result = DB::select($query);

        $data = [];

        if(count($result) == 0) return redirect()->route('search');

        $payType = '';
        foreach ($result as $item) {
        	$tcID = $item->ticket_cart_id;
        	$tc = DB::SELECT('select ticket_cart_id as tcID, name, card_date_id as id, ticket_information as info, type_passenger as typePass, cost from ticket_cart where ticket_cart_id = "'.$tcID.'"')[0];

        	if($payTypeID == 1) $payType = "Trực tuyến";
        	else $payType = "Trả sau";

        	$tc->ownTime = $item->own_time;
        	$data[] = $tc;
        };

    	return view('passenger-information\verify-info', ["data" => $data, "payType" => $payType, "payTypeID" => $payTypeID]);
    }

    public function backToPassengetInfo(){

    	if(!Auth::check()){
    		return redirect()->route('search');
    	}

    	$time = 100;// Default OwnTime

    	$userID = Auth::User()->user_id;
        $query = "SELECT ticket_cart_id, own_time FROM ticket_sold WHERE user_id = ".$userID." AND state = 'S' AND own_time > 0";
        $result = DB::select($query);

        if(count($result) == 0) return redirect()->route('search');

        $ticketCartIDs = [];

        foreach ($result as $item) {
        	$tcID = $item->ticket_cart_id;

        	$query = "UPDATE ticket_sold SET own_time = ".$time.", ticket_cart_id = NULL, state = 'W' WHERE ticket_cart_id='".$tcID."'";
            $ownTime = DB::select($query); 

        	$query = "DELETE FROM ticket_cart WHERE ticket_cart_id = '".$tcID."'";
            DB::select($query); 	

            $ticketCartIDs[] = $tcID;
        };

        return Utils::createResponse(0, json_encode($ticketCartIDs));
    }
}
