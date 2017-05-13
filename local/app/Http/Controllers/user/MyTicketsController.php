<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Utils\Utils;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\database\DatabaseController;

class MyTicketsController extends Controller
{
    public function getView(){
    	if(!Auth::check()) return redirect()->route('getLogin');
    	$userID = Auth::User()->user_id;

    	$waitSeatsJSON = DatabaseController::getWaitSeatsInfo();
    	$ticketsPaid = DB::SELECT('SELECT * FROM ticket_cart tc inner join(SELECT bill_id FROM BILL WHERE user_id ='.$userID.' AND transaction_id IS NOT NULL) b on b.bill_id = tc.bill_id order by date_sell DESC');
    	$ticketsUnpaid = DB::SELECT('SELECT * FROM ticket_cart tc inner join(SELECT bill_id FROM BILL WHERE user_id ='.$userID.' AND transaction_id IS NULL) b on b.bill_id = tc.bill_id');

    	return view('my-ticket\my-tickets', ["waitSeat" => $waitSeatsJSON, "ticketsPaid" => $ticketsPaid, "ticketsUnpaid" => $ticketsUnpaid]);
    	// return Utils::createResponse( 0, '{"waitSeat": '.$waitSeatsJSON.', "ticketsPaid": '.json_encode($ticketsPaid).', "ticketsUnpaid": '.json_encode($ticketsUnpaid).'}');//Test JSON
    }
}
