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

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use App;
use Dompdf\Dompdf;

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

        if(!Auth::check()) return Utils::createResponse(4, '{}');

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
            
    		$price = $ws->price;
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
        $payType = '';
        if($payTypeID == 1) $payType = "Trực tuyến";
        else $payType = "Trả sau";

    	$userID = Auth::User()->user_id;
        $query = "SELECT ticket_cart_id, own_time FROM ticket_sold WHERE user_id = ".$userID." AND state = 'W' AND ticket_cart_id IS NOT NULL";
        $result = DB::select($query);

        $data = [];

        if(count($result) == 0) return redirect()->route('search');

        foreach ($result as $item) {
        	$tcID = $item->ticket_cart_id;
        	$tc = DB::SELECT('select ticket_cart_id as tcID, name, card_date_id as id, ticket_information as info, type_passenger as typePass, cost from ticket_cart where ticket_cart_id = "'.$tcID.'"')[0];

        	$tc->ownTime = $item->own_time;
        	$data[] = $tc;
        };

    	return view('passenger-information\verify-info', ["data" => $data, "payType" => $payType, "payTypeID" => $payTypeID]);
    }

    public function backToPassengetInfo(){

    	if(!Auth::check()){
    		return Utils::createResponse(4, '{}');
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

    public function handlePayment(Request $request){

    	$paymentType = $request->payType;
    	if(empty($paymentType)) return Utils::createResponse(5, '{}');

    	if(!Auth::check()){
    		return Utils::createResponse(4, '{}');
    	}

    	$userID = Auth::User()->user_id;
        $query = "SELECT ticket_cart_id FROM ticket_sold WHERE user_id = ".$userID." AND state = 'W' AND ticket_cart_id IS NOT NULL AND own_time > 5"; //Dự trù thời gian 2 dòng for là 5s
        $result = DB::select($query);

        $data = [];

        if(count($result) == 0) return redirect()->route('search');

        $cost = 0;
        foreach ($result as $item) {
        	$tcID = $item->ticket_cart_id;

        	$ti = DB::SELECT('select cost from ticket_cart where ticket_cart_id = "'.$tcID.'"');
        	if(count($ti)==0) continue;

        	$cost += $ti[0]->cost;

        };


        $timePay = 2000; //payment later
        if($paymentType == 1) $timePay = 100; //Payment online

        $bill = new Bill;
    	$bill->user_id = $userID;
    	$bill->sum_fare = $cost;
    	$bill->own_time = $timePay;
    	$bill->save();

        foreach ($result as $item) {
        	$tcID = $item->ticket_cart_id;
        	DB::SELECT('UPDATE ticket_cart SET payment_type = '.$paymentType.', bill_id = '.$bill->bill_id.' WHERE ticket_cart_id = "'.$tcID.'"');
        	DB::SELECT('UPDATE ticket_sold SET state = "S", own_time = 0 WHERE ticket_cart_id = "'.$tcID.'"');
        };

    	return Utils::createResponse(0, '{"billID": "'.$bill->bill_id.'"}');
    }

    public function getPaymentLater(Request $request){

    	$billID = $request->billID;
    	if(!Auth::check() || empty($billID)){
    		return redirect()->route('search');
    	}

    	$userID = Auth::User()->user_id;
        $query = "SELECT ts.ticket_cart_id, own_time, ticket_id FROM ticket_sold ts INNER JOIN (SELECT ticket_cart_id FROM ticket_cart WHERE bill_id = ".$billID.") tc on ts.ticket_cart_id = tc.ticket_cart_id WHERE user_id = ".$userID." AND state = 'S'";
        $result = DB::select($query);

        $data = [];

        if(count($result) == 0) return redirect()->route('search');

        foreach ($result as $item) {
        	$tcID = $item->ticket_cart_id;

        	$ti = DB::SELECT('select ticket_cart_id as tcID, name, card_date_id as id, ticket_information as info, type_passenger as typePass, cost, bill_id as bill from ticket_cart where ticket_cart_id = "'.$tcID.'"');
        	if(count($ti) == 0) continue;

        	$typeSeat = DB::select('SELECT name FROM type_seat ts INNER JOIN (SELECT type_seat_id FROM car c inner join (SELECT car_id FROM tickets WHERE ticket_id = '.$item->ticket_id.') t on c.car_id = t.car_id) tc on tc.type_seat_id = ts.type_seat_id')[0]->name;

        	$tc = $ti[0];
        	$tc->ownTime = $item->own_time;
        	$tc->typeSeat = $typeSeat;
        	$tc->state = "Chờ thanh toán trả sau";
        	$data[] = $tc;
        };

        if(count($data)==0) return redirect()->route('search');

    	return view("payment\payment-later", ["data" => $data, "bill" => $billID, "ownTime" => 2000]);
    }

    public function getPaymentOnline(Request $request){

    	$billID = $request->billID;
    	if(!Auth::check() || empty($billID)){
    		return redirect()->route('search');
    	}

    	$results = DB::SELECT('SELECT sum_fare, own_time FROM bill WHERE bill_id='.$billID.' AND transaction_id IS NULL');
    	if(count($results)==0) return redirect()->route('search');

    	$sumFare = $results[0]->sum_fare;
    	$payTime = $results[0]->own_time;

        $banks = DB::SELECT('SELECT bankID, name FROM bank');

    	return view('payment\payment-online', ['billID'=>$billID, 'sumFare'=>$sumFare, 'payTime'=>$payTime, 'banks'=>$banks]);
    }

    public function postPaymentOnline(Request $request){
        // $client = new Client();
        // $res = $client->request('GET', 'http://192.168.1.115/Web-Book-Train-Ticket-Online/test');
        // echo (string)$res->getBody();

        $billID = $request->billID;
        $bankID = $request->bankID;
        $accountHolder = $request->accountHolder;
        $cardID = $request->cardID;

        if(empty($billID) || empty($bankID) || empty($accountHolder) || empty($cardID)){
            return Utils::createResponse( 6, '{}');
        }

        if(!Auth::check()){
            return Utils::createResponse( 4, '{}');
        }

        $results = DB::SELECT('SELECT sum_fare FROM bill WHERE bill_id='.$billID.' AND own_time > 3');
        if(count($results)==0) return Utils::createResponse( 7, '{}');

        $sumFare = $results[0]->sum_fare;

        $token = 'dsvn111111';
        $client = new Client();
        $response;
        try {
            $response = $client->post('http://192.168.1.117/PaymentService/api/payment/'.$bankID, [
            'form_params' => [
                'spID' => 'dsvn',
                'cardID' => $cardID,
                'accountHolder' => $accountHolder,
                'billID' => $billID,
                'charges' => $sumFare,
                'token' => $token
            ]
        ]);
        } catch (RequestException $e) {

            return Utils::createResponseMessage( 1, "Address of Payment api uncorrect!", '{}');
        }

        $res = json_decode($response->getBody());
        if($res->code != 0) return Utils::createResponseMessage($res->code, $res->message, '{}');

        $transactionID = $res->data->transactionID;

        $bill = Bill::find($billID);
        $bill->transaction_id = $transactionID;
        $bill->own_time = 0;
        $bill->save();

        return Utils::createResponse( 0, '{"billID": "'.$bill->bill_id.'"}');
    }

    public function getPaymentSuccess(Request $request){

        $billID = $request->billID;

        $results = DB::SELECT('SELECT bill_id FROM bill WHERE bill_id = '.$billID.' AND transaction_id IS NOT NULL');
        if(count($results) == 0) return redirect()->route('search');

        $query = "SELECT ts.ticket_cart_id, ticket_id FROM ticket_sold ts INNER JOIN (SELECT ticket_cart_id FROM ticket_cart WHERE bill_id = ".$billID.") tc on ts.ticket_cart_id = tc.ticket_cart_id";
        $result = DB::select($query);

        $data = [];

        if(count($result) == 0) return redirect()->route('search');

        foreach ($result as $item) {
            $tcID = $item->ticket_cart_id;

            $ti = DB::SELECT('select ticket_cart_id as tcID, name, card_date_id as id, ticket_information as info, type_passenger as typePass, cost from ticket_cart where ticket_cart_id = "'.$tcID.'"');
            if(count($ti) == 0) continue;

            $typeSeat = DB::select('SELECT name FROM type_seat ts INNER JOIN (SELECT type_seat_id FROM car c inner join (SELECT car_id FROM tickets WHERE ticket_id = '.$item->ticket_id.') t on c.car_id = t.car_id) tc on tc.type_seat_id = ts.type_seat_id')[0]->name;

            $tc = $ti[0];
            $tc->typeSeat = $typeSeat;
            $data[] = $tc;
        };

        if(count($data)==0) return redirect()->route('search');

        return view("payment\payment-success", ["data" => $data, "bill" => $billID]);
    }

    public function downloadTicket(Request $request){

        if(!Auth::check()) return redirect()->route('getLogin');

        $tcID = $request->tcID;
        if(empty($tcID)) return redirect()->route('/');

        $userID = Auth::User()->user_id;

        $query = "SELECT tc.ticket_cart_id as tcID, name, card_date_id as id, ticket_information as info, type_passenger as typePass, cost, ts.trip_id, ts.ticket_id, ts.station_leave_id, ts.station_arrive_id from ticket_cart tc INNER JOIN (SELECT ticket_cart_id, trip_id, ticket_id, station_leave_id, station_arrive_id FROM ticket_sold WHERE user_id = ".$userID." AND ticket_cart_id = '".$tcID."') ts on ts.ticket_cart_id = tc.ticket_cart_id";
        $results = DB::SELECT($query);

        if(count($results) == 0) return redirect()->route('/');

        $tc = $results[0];

        $trainName = '';
        $slName = '';
        $saName = '';
        $dateLeave = '';
        $timeLeave = '';
        $carOrdinal = '';
        $seatOrdinal = '';
        $seatType = '';

        //TrainName
        $query = 'SELECT name FROM train a inner join(SELECT train_id FROM trip WHERE trip_id = '.$tc->trip_id.' ) i on i.train_id = a.train_id';
        $name = DB::select($query);
        if(count($name)==0){
            $trainName = 'No Name';
        }
        else{
            $trainName = $name[0]->name;
        }

        //slName
        $query = 'SELECT name FROM station WHERE station_id = '.$tc->station_leave_id;
        $name = DB::select($query);
        if(count($name)==0){
            $slName = 'No Name';
        }
        else{
            $slName = $name[0]->name;
        }

        //saName
        $query = 'SELECT name FROM station WHERE station_id = '.$tc->station_arrive_id;
        $name = DB::select($query);
        if(count($name)==0){
            $saName = 'No Name';
        }
        else{
            $saName = $name[0]->name;
        }

        //dateLeave
        $query = 'SELECT date_format(date_leave, "%d/%m/%Y") as date_leave FROM station_stop WHERE station_id= '.$tc->station_leave_id.' AND trip_id= '.$tc->trip_id;
        $date = DB::select($query);
        if(count($date)==0){
            $dateLeave = 'No Date';
        }
        else{
            $dateLeave = $date[0]->date_leave;
        }

        //timeLeave
        $query = 'SELECT date_format(date_leave, "%H:%i") as date_leave FROM station_stop WHERE station_id= '.$tc->station_leave_id.' AND trip_id= '.$tc->trip_id;
        $date = DB::select($query);
        if(count($date)==0){
            $timeLeave = 'No Time';
        }
        else{
            $timeLeave = $date[0]->date_leave;
        }

        //carOrdinal
        $query = 'SELECT ordinal FROM car c inner join(SELECT car_id FROM tickets WHERE ticket_id = '.$tc->ticket_id.') t on t.car_id = c.car_id';
        $ordinal = DB::select($query);
        if(count($ordinal)==0){
            $carOrdinal = 'No Ordinal';
        }
        else{
            $carOrdinal = $ordinal[0]->ordinal;
        }

        //seatOrdinal
        $query = 'SELECT ordinal FROM tickets WHERE ticket_id = '.$tc->ticket_id;
        $ordinal = DB::select($query);
        if(count($ordinal)==0){
            $seatOrdinal = 'No Ordinal';
        }
        else{
            $seatOrdinal = $ordinal[0]->ordinal;
        }

        //Type Seat
        $typeSeat = DB::select('SELECT name FROM type_seat ts INNER JOIN (SELECT type_seat_id FROM car c inner join (SELECT car_id FROM tickets WHERE ticket_id = '.$tc->ticket_id.') t on c.car_id = t.car_id) tc on tc.type_seat_id = ts.type_seat_id')[0]->name;



        $html = '<html>
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                <style>
                  body { font-family: DejaVu Sans, sans-serif; font-size: 10px;}
                  .padding{
                    padding-left:20px;
                  }
                </style>
                </head>
                <body>
                    <h2>THẺ LÊN TÀU HỎA</h2>
                    <p>Mã vé: '.$tc->tcID.'</p>
                    <p>Thông tin hành trình</p>
                    <div class="padding">
                        <p>Ga đi - Ga đến: '.$slName.' - '.$saName.'</p>
                        <p>Tàu: '.$trainName.'</p>
                        <p>Ngày đi: '.$dateLeave.'</p>
                        <p>Giờ đi: '.$timeLeave.'</p>
                        <p>Toa: '.$carOrdinal.'</p>
                        <p>Ghê: '.$seatOrdinal.' ('.$typeSeat.')</p>
                    </div>
                    <p>Thông tin hành khách</p>
                    <div class="padding">
                        <p>Họ tên: '.$tc->name.'</p>
                        <p>Giấy tờ: '.$tc->id.'</p>
                        <p>Loại vé: '.$tc->typePass.'</p>
                    </div>
                    <p>Giá vé: '.$tc->cost.' VNĐ</p>
                </body>
                </html>';

        // return $html;
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A5', 'landscape');

        $dompdf->render();
        return $dompdf->stream($tc->tcID.'.pdf');
    }
}
