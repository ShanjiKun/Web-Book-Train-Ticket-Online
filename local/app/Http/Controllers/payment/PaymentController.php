<?php

namespace App\Http\Controllers\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Utils\Utils;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\database\DatabaseController;
use App\Model\Bill;

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

    		// $query = '';
    		// if($data->payment == 1){
    		// 	$query = "UPDATE ticket_sold SET ticket_cart_id = '".$ticketCartID."', state = 'S' WHERE trip_id = ".$ws->tripID." AND ticket_id = ".$ws->ticketID." AND station_leave_id = ".$ws->stationIDLeave." AND station_arrive_id=".$ws->stationIDArrive;
    		// }else{
    		// 	$time = 86400; //Time of a day
    		// 	$time = 100;
    		// 	$query = "UPDATE ticket_sold SET own_time = '".$time."', ticket_cart_id = '".$ticketCartID."', state = 'S' WHERE trip_id = ".$ws->tripID." AND ticket_id = ".$ws->ticketID." AND station_leave_id = ".$ws->stationIDLeave." AND station_arrive_id=".$ws->stationIDArrive;
    		// }
      //       DB::select($query);
    		
    		$query = "UPDATE ticket_sold SET ticket_cart_id = '".$ticketCartID."' WHERE trip_id = ".$ws->tripID." AND ticket_id = ".$ws->ticketID." AND station_leave_id = ".$ws->stationIDLeave." AND station_arrive_id=".$ws->stationIDArrive;
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
        $query = "SELECT ticket_cart_id, own_time FROM ticket_sold WHERE user_id = ".$userID." AND state = 'W' AND ticket_cart_id IS NOT NULL";
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
        $query = "SELECT ticket_cart_id, own_time FROM ticket_sold WHERE user_id = ".$userID." AND state = 'W' AND ticket_cart_id IS NOT NULL";
        $result = DB::select($query);

        if(count($result) == 0) return redirect()->route('search');

        $ticketCartIDs = [];

        foreach ($result as $item) {
        	$tcID = $item->ticket_cart_id;

        	// $query = "UPDATE ticket_sold SET own_time = ".$time.", ticket_cart_id = NULL, state = 'W' WHERE ticket_cart_id='".$tcID."'";
         //    $ownTime = DB::select($query);
        	$query = "UPDATE ticket_sold SET ticket_cart_id = NULL WHERE ticket_cart_id='".$tcID."'";
            $ownTime = DB::select($query); 

        	$query = "DELETE FROM ticket_cart WHERE ticket_cart_id = '".$tcID."'";
            DB::select($query); 	

            $ticketCartIDs[] = $tcID;
        };

        return Utils::createResponse(0, json_encode($ticketCartIDs));
    }

    public function handlePaymentLater(){
    	if(!Auth::check()){
    		return redirect()->route('search');
    	}

    	$userID = Auth::User()->user_id;
        $query = "SELECT ticket_cart_id FROM ticket_sold WHERE user_id = ".$userID." AND state = 'W' AND ticket_cart_id IS NOT NULL AND own_time > 5"; //Dự trù thời gian 2 dòng for là 5s
        $result = DB::select($query);

        $data = [];

        if(count($result) == 0) return redirect()->route('search');

        $cost = 0;
        foreach ($result as $item) {
        	$tcID = $item->ticket_cart_id;

        	$ti = DB::SELECT('select cost, bill_id from ticket_cart where ticket_cart_id = "'.$tcID.'"');
        	if(count($ti)==0) continue;
        	if($ti[0]->bill_id != null) $bill_id = $ti[0]->bill_id;
        	$cost += $ti[0]->cost;

        };


        $timePay = 100; //Time payment

        $bill = new Bill;
    	$bill->user_id = $userID;
    	$bill->sum_fare = $cost;
    	$bill->own_time = $timePay;
    	$bill->save();

        foreach ($result as $item) {
        	$tcID = $item->ticket_cart_id;
        	DB::SELECT('UPDATE ticket_cart SET payment_type = 2, bill_id = '.$bill->bill_id.' WHERE ticket_cart_id = "'.$tcID.'"');
        	DB::SELECT('UPDATE ticket_sold SET state = "S", own_time = 0 WHERE ticket_cart_id = "'.$tcID.'"');
        };

    	return Utils::createResponse(0, '{"billID": "'.$bill->bill_id.'"}');
    }

    public function getPaymentLater(Request $request){

    	$billID = $request->billID;
    	if(!Auth::check()){
    		return redirect()->route('search');
    	}

    	$userID = Auth::User()->user_id;
        $query = "SELECT ts.ticket_cart_id, own_time, ticket_id FROM ticket_sold ts INNER JOIN (SELECT ticket_cart_id FROM ticket_cart WHERE bill_id = ".$billID.") tc on ts.ticket_cart_id = tc.ticket_cart_id WHERE user_id = ".$userID." AND state = 'S'";
        $result = DB::select($query);

        $data = [];

        if(count($result) == 0) return redirect()->route('search');

        $bill = '';
        foreach ($result as $item) {
        	$tcID = $item->ticket_cart_id;

        	$ti = DB::SELECT('select ticket_cart_id as tcID, name, card_date_id as id, ticket_information as info, type_passenger as typePass, cost, bill_id as bill from ticket_cart where ticket_cart_id = "'.$tcID.'"');
        	if(count($ti) == 0) continue;

        	$typeSeat = DB::select('SELECT name FROM type_seat ts INNER JOIN (SELECT type_seat_id FROM car c inner join (SELECT car_id FROM tickets WHERE ticket_id = '.$item->ticket_id.') t on c.car_id = t.car_id) tc on tc.type_seat_id = ts.type_seat_id')[0]->name;

        	$tc = $ti[0];
        	$tc->ownTime = $item->own_time;
        	$tc->typeSeat = $typeSeat;
        	$tc->state = "Chờ thanh toán trả sau";
        	$bill = $tc->bill;
        	$data[] = $tc;
        };

        if(count($data)==0) return redirect()->route('search');

    	return view("payment\payment-later", ["data" => $data, "bill" => $bill, "ownTime" => 10]);
    }
}
