<?php

namespace App\Http\Controllers\database;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Utils\Utils;
use Illuminate\Support\Facades\Auth;
use App\User;

class DatabaseController extends Controller
{
    //Fixed query get trips
    public function searchTrip(Request $request){
        $stationLeave = $request->input('stationLeave');
        $stationArrive = $request->input('stationArrive');
        $indexOfRound = $request->input('indexOfRound');
        $dateLeave = $request->input('dateLeave'); //string date Y-m-d
        $dateRound = $request->input('dateRound'); //string date Y-m-d
        $timeLeave = $request->input('timeLeave'); //string time H:i
        $timeRound = $request->input('timeRound'); //string time H:i 

        $query = "SELECT * FROM trip t inner join(SELECT sl.trip_id FROM STATION_STOP sl inner join (SELECT ss.trip_id, ss.station_id, ss.date_arrive FROM STATION_STOP ss WHERE date_format(ss.date_arrive, '%Y-%m-%d') >= str_to_date('".$dateLeave."', '%Y-%m-%d') AND ss.station_id = '".$stationArrive."') as sa ON sl.trip_id = sa.trip_id WHERE date_format(sl.date_leave, '%Y-%m-%d') = str_to_date('".$dateLeave."', '%Y-%m-%d') AND sl.station_id = '".$stationLeave."' AND sl.date_leave < sa.date_arrive ORDER BY sl.date_leave) as at on at.trip_id = t.trip_id WHERE t.state = 'E'";
        $tripsLeave = DB::select($query);

        if($tripsLeave){
            $json = '{'.'"leave":'.json_encode($tripsLeave);

            // Search round trip
            if($indexOfRound == 2){
                // $query = "SELECT sl.trip_id FROM STATION_STOP sl inner join (SELECT ss.trip_id, ss.station_id, ss.date_arrive FROM STATION_STOP ss WHERE date_format(ss.date_arrive, '%Y-%m-%d') >= str_to_date('".$dateRound."', '%Y-%m-%d') AND ss.station_id = '".$stationLeave."') as sa ON sl.trip_id = sa.trip_id WHERE date_format(sl.date_leave, '%Y-%m-%d') = str_to_date('".$dateRound."', '%Y-%m-%d') AND sl.station_id = '".$stationArrive."' ORDER BY sl.date_leave";
                $query = "SELECT sl.trip_id FROM STATION_STOP sl inner join (SELECT ss.trip_id, ss.station_id, ss.date_arrive FROM STATION_STOP ss WHERE date_format(ss.date_arrive, '%Y-%m-%d') >= str_to_date('".$dateLeave."', '%Y-%m-%d') AND ss.station_id = '".$stationArrive."') as sa ON sl.trip_id = sa.trip_id WHERE date_format(sl.date_leave, '%Y-%m-%d') = str_to_date('".$dateLeave."', '%Y-%m-%d') AND sl.station_id = '".$stationLeave."' ORDER BY sl.date_leave";
                $tripsArrive = DB::select($query);
                $json = $json.','.'"arrive":'.json_encode($tripsArrive);
            }
            
            $json = $json.'}';
            $ret = Utils::createResponse( 0, $json);
            return $ret;
        }

        return Utils::createResponse( 1, '{}');
    }

    public function getTrainNameViaTrip(Request $request){
        //Input: [{"trip_id":"1"}, {"trip_id":"2"}, {"trip_id":"3"}, {"trip_id":"4"}] trips_id
        //Output: [{"trip_id":"1", "train_name":"SE1"}, {"trip_id":"2", "train_name":"SE2"}] train_name base on trip_id

        $trips = json_decode($request->trips, true); // Array dictionary

        $conditions = 't.trip_id = '.$trips[0]['trip_id'];
        for( $i = 1; $i < count($trips); $i++ ){
            $conditions = $conditions.' OR t.trip_id = '.$trips[$i]['trip_id'];
        }

        $query = "SELECT tt.trip_id, t.name as train_name FROM train t INNER JOIN (SELECT t.trip_id, t.train_id FROM trip t WHERE ".$conditions." ) tt on tt.train_id = t.train_id";
        $tripsWithTrainName = DB::select($query);

        if($tripsWithTrainName){
            $json = json_encode($tripsWithTrainName);
            $ret = Utils::createResponse( 0, $json);
            return $ret;
        }
        return Utils::createResponse( 1, '{}');
    }
    public function getTrainTimeViaStation(Request $request){
        //Input: params = 'stationIDLeave': '1', 'stationIDArrive': '3', "trips":[{"trip_id":"1"}, {"trip_id":"2"}]
        //Output: [{'trip_id':'1', 'timeLeave':'1490162400', 'timeArrive':'1490162400'}]

        $stationIDLeave = $request->stationIDLeave;
        $stationIDArrive = $request->stationIDArrive;
        $trips = json_decode($request->trips, true); // Array dictionary

        $conditionsL = 'sl.trip_id = '.$trips[0]['trip_id'];
        $conditionsA = 'sa.trip_id = '.$trips[0]['trip_id'];
        for( $i = 1; $i < count($trips); $i++ ){
            $conditionsL = $conditionsL.' OR sl.trip_id = '.$trips[$i]['trip_id'];
            $conditionsA = $conditionsA.' OR sa.trip_id = '.$trips[$i]['trip_id'];
        }

        $query = "SELECT sl.trip_id, UNIX_TIMESTAMP(sl.date_leave) as timeLeave, UNIX_TIMESTAMP(sa.date_arrive) as timeArrive FROM station_stop sl INNER JOIN (SELECT sa.trip_id, sa.station_id, sa.date_arrive FROM station_stop sa WHERE (".$conditionsA.") AND sa.station_id = ".$stationIDArrive.") sa on sl.trip_id = sa.trip_id WHERE (".$conditionsL.") AND sl.station_id = ".$stationIDLeave." ORDER BY timeLeave";
        $trainTimeWithStation = DB::select($query);
        if($trainTimeWithStation){
            $json = json_encode($trainTimeWithStation);
            $ret = Utils::createResponse( 0, $json);
            return $ret;
        }
        return Utils::createResponse( 1, '{}');
    }
    //Fixed query get unavailable seats
    public function getNumberSeat(Request $request){
        //Input: 'stationIDLeave': '1', 'stationIDArrive': '3', "trips":[{"trip_id":"1"}, {"trip_id":"2"}]
        //Output: [{'trip_id':'1', 'unavailableSeat':'12', 'availableSeat':'60'}]

        $stationIDLeave = $request->stationIDLeave;
        $stationIDArrive = $request->stationIDArrive;
        $trips = json_decode($request->trips, true); // Array dictionary

        // $conditions1 = 'tc.trip_id = '.$trips[0]['trip_id'];
        $conditions2 = 'trip_id = '.$trips[0]['trip_id'];
        for( $i = 1; $i < count($trips); $i++ ){
            // $conditions1 = $conditions1.' OR tc.trip_id = '.$trips[$i]['trip_id'];
            $conditions2 = $conditions2.' OR trip_id = '.$trips[$i]['trip_id'];
        }

        //Query get number of seat in trip
        // $query = "SELECT tc.trip_id, SUM(c.num_seat) as number_seat FROM `trip_car` tc INNER JOIN car c on tc.car_id = c.car_id where ".$conditions1." GROUP BY tc.trip_id";
        $query = "SELECT tt.trip_id, SUM(c.num_seat) as number_seat FROM car c INNER JOIN (SELECT trip_id, train_id FROM TRIP WHERE ".$conditions2.") tt on c.train_id = tt.train_id WHERE c.state = 'E' GROUP BY tt.trip_id";
        $numberSeats = DB::select($query);

        if(!$numberSeats) return Utils::createResponse( 1, '{}');

        //Query get number of unavailable seat in trip
        //Fixed
        $greater = '>';
        $greaterEqual = '>=';
        $less = '<';
        $lessEqual = '<=';
        if($stationIDArrive < $stationIDLeave){
            //Heading is NS
            $query = "SELECT trip_id, count(ticket_id) as unavailable_seat FROM `ticket_sold` ts WHERE (".$conditions2.") and NOT ((station_leave_id ".$less." ".$stationIDLeave." AND station_leave_id ".$lessEqual." ".$stationIDArrive.") OR (station_arrive_id ".$greaterEqual." ".$stationIDLeave." AND station_arrive_id ".$greater." ".$stationIDArrive.")) GROUP BY trip_id";
        }else{
            //Heading is SN
            $query = "SELECT trip_id, count(ticket_id) as unavailable_seat FROM `ticket_sold` ts WHERE (".$conditions2.") and NOT ((station_leave_id ".$greater." ".$stationIDLeave." AND station_leave_id ".$greaterEqual." ".$stationIDArrive.") OR (station_arrive_id ".$lessEqual." ".$stationIDLeave." AND station_arrive_id ".$less." ".$stationIDArrive.")) GROUP BY trip_id";
        }

        $unavailableSeats = DB::select($query);

        //{'1':'122', '2':'80'}
        $usDict  = array('' => '');
        foreach( $unavailableSeats as $unavailableSeat ){
            $usDict[$unavailableSeat->trip_id] = $unavailableSeat->unavailable_seat;
        }

        $numberSeat = $numberSeats[0];
        $unavailableSeat;
        $isEmpty = empty($usDict[$numberSeat->trip_id]);
        $isEmpty ? $unavailableSeat = 0 : $unavailableSeat = $usDict[$numberSeat->trip_id]; 
        $availableSeat = $numberSeat->number_seat - $unavailableSeat;

        $json = '[{"trip_id":"'.$numberSeat->trip_id.'", "availableSeat":"'.$availableSeat.'", "unavailableSeat":"'.$unavailableSeat.'"}';
        for($i = 1; $i < count($numberSeats); $i++){

            $numberSeat = $numberSeats[$i]; 
            $isEmpty = empty($usDict[$numberSeat->trip_id]);
            $isEmpty ? $unavailableSeat = 0 : $unavailableSeat = $usDict[$numberSeat->trip_id];
            $availableSeat = $numberSeat->number_seat - $unavailableSeat;

            $json .= ', {"trip_id":"'.$numberSeat->trip_id.'", "availableSeat":"'.$availableSeat.'", "unavailableSeat":"'.$unavailableSeat.'"}';
        }

        $json .= ']';
        $ret = Utils::createResponse( 0, $json);
        return $ret;
    }
    public function getCars(Request $request){
        //Input: tripId, stationIDLeave, stationIDArrive
        //Output: { "code":"0", "message":"success", "data":[{"car_id":"1", "type":"B80", "state":"0"}, {"car_id":"2", "type":"B80L", ordinal="1", "state":"1"}]}
        $tripID = $request->tripID;
        $stationIDLeave = $request->stationIDLeave;
        $stationIDArrive = $request->stationIDArrive;

        $query = "SELECT c.car_id, c.type_seat_id as type, c.ordinal FROM car c inner JOIN (SELECT train_id FROM trip WHERE trip_id = :tripID) tc on c.train_id = tc.train_id WHERE c.state = 'E' ORDER BY `c`.`num_seat` DESC";
        $cars = DB::select($query, ['tripID' => $tripID]);

        //Car state
        //0: available
        //1: unavailable
        //2: full seat
        if($cars){
            $today = time();
            $json = '[';
            foreach ($cars as $car) {
                $query = "SELECT UNIX_TIMESTAMP(t.date_sell) as dateSell FROM trip t WHERE t.trip_id = :tripID";
                $dateSell = DB::select($query, ['tripID'=>$tripID])[0]->dateSell;

                $state = '1';
                if($today >= $dateSell){
                    //Fixed
                    $greater = '>';
                    $greaterEqual = '>=';
                    $less = '<';
                    $lessEqual = '<=';
                    if($stationIDArrive < $stationIDLeave){
                        //Heading is NS
                        $query = "SELECT COUNT(ts.ticket_id) as numSoldTicket, t.num_seat FROM ticket_sold ts INNER JOIN (SELECT t.ticket_id, t.car_id, c.num_seat FROM `tickets` t INNER JOIN car c on t.car_id = c.car_id WHERE c.car_id = ".$car->car_id.") t ON ts.ticket_id = t.ticket_id WHERE ts.trip_id = ".$tripID." AND NOT ((station_leave_id ".$less." ".$stationIDLeave." AND station_leave_id ".$lessEqual." ".$stationIDArrive.") OR (station_arrive_id ".$greaterEqual." ".$stationIDLeave." AND station_arrive_id ".$greater." ".$stationIDArrive.")) GROUP BY t.car_id";
                    }else{
                        //Heading is SN
                        $query = "SELECT COUNT(ts.ticket_id) as numSoldTicket, t.num_seat FROM ticket_sold ts INNER JOIN (SELECT t.ticket_id, t.car_id, c.num_seat FROM `tickets` t INNER JOIN car c on t.car_id = c.car_id WHERE c.car_id = ".$car->car_id.") t ON ts.ticket_id = t.ticket_id WHERE ts.trip_id = ".$tripID." AND NOT ((station_leave_id ".$greater." ".$stationIDLeave." AND station_leave_id ".$greaterEqual." ".$stationIDArrive.") OR (station_arrive_id ".$lessEqual." ".$stationIDLeave." AND station_arrive_id ".$less." ".$stationIDArrive.")) GROUP BY t.car_id";
                    }

                    $result = DB::select($query);
                    if($result){
                        $result = $result[0];
                        $numSoldTicket = $result->numSoldTicket;
                        $num_seat = $result->num_seat;
                        if($numSoldTicket < $num_seat){
                            $state = '0';
                        }else{
                            $state = '2';
                        }
                    }else{
                        $state = '0';
                    }
                }
                $json .= '{"car_id":"'.$car->car_id.'", "type":"'.$car->type.'", "ordinal":"'.$car->ordinal.'", "state":"'.$state.'"}';
                if($car!=end($cars)){
                    $json .= ', ';
                }
            }
            $json .= ']';
            return Utils::createResponse( 0, $json);
        }else{
            return Utils::createResponse( 1, '{}');
        }
    }
    public function getSeat(Request $request){
        //Need: ticket_id, ordinal ticket on train
        //Input: carID, tripId, stationIDLeave, stationIDArrive
        //Output: { "code":"0", "message":"success", "data":[{"ticket_id":"1", "ordinal":"1", "state":"A"}, {"ticket_id":"2", "ordinal":"2", "state":"U"}]}
        //state:
        // U: unavailble
        // S: sold
        // W: wait
        // A: available
        //Data sorted by ordinal ASC

        $carID = $request->carID;
        $tripID = $request->tripID;
        $stationIDLeave = $request->stationIDLeave;
        $stationIDArrive = $request->stationIDArrive;

        //Checking Json
        if(!$carID || !$tripID || !$stationIDLeave || !$stationIDArrive) return Utils::createResponse(2, null);

        //Select tickets in car
        $query = "SELECT t.ticket_id, t.ordinal FROM tickets t WHERE t.car_id = :carID ORDER BY t.ordinal";
        $seats = DB::select($query, ['carID' => $carID]);

        //Checking $seats
        if(!$seats) return Utils::createResponse(1, '{}');

        //Select date sell of trip
        $query = "SELECT UNIX_TIMESTAMP(t.date_sell) as dateSell FROM trip t WHERE t.trip_id = :tripID";
        $dateSell = DB::select($query, ['tripID'=>$tripID])[0]->dateSell;

        //Compare datesell with today
        $today = time();
        if($today < $dateSell){
            //All seats are unavailable
            $state = 'U';
            $json = '[';
            foreach($seats as $seat){
                $json .= '{"ticket_id":"'.$seat->ticket_id.'", "ordinal":"'.$seat->ordinal.'", "state":"'.$state.'"}';
                if($seat!=end($seats)){
                    $json .= ', ';
                }
            }
            $json .= ']';
            return Utils::createResponse( 0, $json);
        }

        //Select seat in ticket sold inorder to find seat that is not free
        //Fixed
        $greater = '>';
        $greaterEqual = '>=';
        $less = '<';
        $lessEqual = '<=';
        if($stationIDArrive < $stationIDLeave){
            //Heading is NS
            $query = "SELECT ts.ticket_id, ts.state FROM ticket_sold ts INNER JOIN (SELECT t.ticket_id, t.car_id, c.num_seat FROM `tickets` t INNER JOIN car c on t.car_id = c.car_id WHERE c.car_id = ".$carID.") t ON ts.ticket_id = t.ticket_id WHERE ts.trip_id = ".$tripID." AND NOT ((station_leave_id ".$less." ".$stationIDLeave." AND station_leave_id ".$lessEqual." ".$stationIDArrive.") OR (station_arrive_id ".$greaterEqual." ".$stationIDLeave." AND station_arrive_id ".$greater." ".$stationIDArrive."))";
        }else{
            //Heading is SN
            $query = "SELECT ts.ticket_id, ts.state FROM ticket_sold ts INNER JOIN (SELECT t.ticket_id, t.car_id, c.num_seat FROM `tickets` t INNER JOIN car c on t.car_id = c.car_id WHERE c.car_id = ".$carID.") t ON ts.ticket_id = t.ticket_id WHERE ts.trip_id = ".$tripID." AND NOT ((station_leave_id ".$greater." ".$stationIDLeave." AND station_leave_id ".$greaterEqual." ".$stationIDArrive.") OR (station_arrive_id ".$lessEqual." ".$stationIDLeave." AND station_arrive_id ".$less." ".$stationIDArrive."))";
        }

        $result = DB::select($query);
        //Checking result
        if($result){

            //Make dictionary in order to search available of seat
            $seatsUnavailble = array('' => '');
            foreach ($result as $rec){
                $seatsUnavailble[$rec->ticket_id] = $rec->state;
            }

            $json = '[';
            foreach($seats as $seat){
                $state = 'A';
                if(!empty($seatsUnavailble[$seat->ticket_id])) $state = $seatsUnavailble[$seat->ticket_id];

                $json .= '{"ticket_id":"'.$seat->ticket_id.'", "ordinal":"'.$seat->ordinal.'", "state":"'.$state.'"}';
                if($seat!=end($seats)){
                    $json .= ', ';
                }
            }
            $json .= ']';
            return Utils::createResponse( 0, $json);
        }

        //result empty
        //Set all seat are available
        $state = 'A';
        $json = '[';
        foreach($seats as $seat){
            $json .= '{"ticket_id":"'.$seat->ticket_id.'", "ordinal":"'.$seat->ordinal.'", "state":"'.$state.'"}';
            if($seat!=end($seats)){
                $json .= ', ';
            }
        }
        $json .= ']';
        return Utils::createResponse( 0, $json);
    }
    public function getCost(Request $request){
        return Utils::createResponse(0, '{"cost": "500"}');
    }
    public function pickSeat(Request $request){
        $tripID = $request->tripID;
        $ticketID = $request->seatID;
        $stationIDLeave = $request->stationIDLeave;
        $stationIDArrive = $request->stationIDArrive;

        $query = "";
        //Select seat in ticket sold inorder to find seat that is not free
        //Fixed
        $greater = '>';
        $greaterEqual = '>=';
        $less = '<';
        $lessEqual = '<=';
        if($stationIDArrive < $stationIDLeave){
            //Heading is NS
            $query = "SELECT ticket_id, state FROM ticket_sold  WHERE trip_id = ".$tripID." AND ticket_id = ".$ticketID." AND NOT ((station_leave_id ".$less." ".$stationIDLeave." AND station_leave_id ".$lessEqual." ".$stationIDArrive.") OR (station_arrive_id ".$greaterEqual." ".$stationIDLeave." AND station_arrive_id ".$greater." ".$stationIDArrive."))";
        }else{
            //Heading is SN
            $query = "SELECT ticket_id, state FROM ticket_sold WHERE trip_id = ".$tripID." AND ticket_id = ".$ticketID." AND NOT ((station_leave_id ".$greater." ".$stationIDLeave." AND station_leave_id ".$greaterEqual." ".$stationIDArrive.") OR (station_arrive_id ".$lessEqual." ".$stationIDLeave." AND station_arrive_id ".$less." ".$stationIDArrive."))";
        }

        $result = DB::select($query);
        if(count($result) == 0){
            //state:
            // U: unavailble
            // S: sold
            // W: wait
            // A: available
            $userID = Auth::User()->user_id;
            $ownTime = 5;
            DB::table('ticket_sold')->insert([
                'ticket_id' => $ticketID,
                'trip_id' => $tripID,
                'user_id' => $userID,
                'station_leave_id' => $stationIDLeave,
                'station_arrive_id' => $stationIDArrive,
                'state' => 'W',
                'own_time' => $ownTime,
            ]);
            return Utils::createResponse( 0,  '{}'); //Success
        }else{
            $json = json_encode($result[0]);
            return Utils::createResponse( 1, $json);
        }
    }
    public function unpickSeat(Request $request){
        $tripID = $request->tripID;
        $ticketID = $request->seatID;
        $stationIDLeave = $request->stationIDLeave;
        $stationIDArrive = $request->stationIDArrive;

        $this->deleteTicketSold($tripID, $ticketID, $stationIDLeave, $stationIDArrive);
        return Utils::createResponse(0, '{"seatID": "'.$ticketID.'"}');
    }
    public function postOwnTime(Request $request){
        $tripID = $request->tripID;
        $ticketID = $request->seatID;
        $stationIDLeave = $request->stationIDLeave;
        $stationIDArrive = $request->stationIDArrive;
        
        $query = "SELECT own_time FROM ticket_sold WHERE trip_id = ".$tripID." AND ticket_id = ".$ticketID." AND station_leave_id = ".$stationIDLeave." AND station_arrive_id=".$stationIDArrive;
        $ownTime = DB::select($query);

        if(count($ownTime)==0) return Utils::createResponse(0, '{"ownTime": "0"}');

        $time = $ownTime[0]->own_time;
        while($time > 0){
            sleep(1);

            //Check have sold
            $query = "SELECT state FROM ticket_sold WHERE trip_id = ".$tripID." AND ticket_id = ".$ticketID." AND station_leave_id = ".$stationIDLeave." AND station_arrive_id=".$stationIDArrive;
            $states = DB::select($query);
            if(count($states)==0 || $states[0]->state == 'S'){
                break;
            }

            //Minus own time
            $query = "UPDATE ticket_sold SET own_time = ".$time." WHERE trip_id = ".$tripID." AND ticket_id = ".$ticketID." AND station_leave_id = ".$stationIDLeave." AND station_arrive_id=".$stationIDArrive;
            $ownTime = DB::select($query);
            $time--;
        }

        if($time==0){
            $this->deleteTicketSold($tripID, $ticketID, $stationIDLeave, $stationIDArrive);
        }

        return Utils::createResponse(0, '{"mes": "done"}'); 
    }
    public function getOwnTime(Request $request){
        $tripID = $request->tripID;
        $ticketID = $request->ticketID;
        $stationIDLeave = $request->stationIDLeave;
        $stationIDArrive = $request->stationIDArrive;

        $query = "SELECT * FROM ticket_sold WHERE trip_id = ".$tripID." AND ticket_id = ".$ticketID;
        //Select seat in ticket sold inorder to find seat that is not free
        //Fixed
        $greater = '>';
        $greaterEqual = '>=';
        $less = '<';
        $lessEqual = '<=';
        if($stationIDArrive < $stationIDLeave){
            //Heading is NS
            $query = "SELECT own_time FROM ticket_sold  WHERE trip_id = ".$tripID." AND ticket_id = ".$ticketID." AND NOT ((station_leave_id ".$less." ".$stationIDLeave." AND station_leave_id ".$lessEqual." ".$stationIDArrive.") OR (station_arrive_id ".$greaterEqual." ".$stationIDLeave." AND station_arrive_id ".$greater." ".$stationIDArrive."))";
        }else{
            //Heading is SN
            $query = "SELECT own_time FROM ticket_sold WHERE trip_id = ".$tripID." AND ticket_id = ".$ticketID." AND NOT ((station_leave_id ".$greater." ".$stationIDLeave." AND station_leave_id ".$greaterEqual." ".$stationIDArrive.") OR (station_arrive_id ".$lessEqual." ".$stationIDLeave." AND station_arrive_id ".$less." ".$stationIDArrive."))";
        }

        $result = DB::select($query);
        if(count($result)>0) return $result[0]->own_time;
        return 0;
    }
    public function getWaitSeats(){
        //Output
        //[{"trainName": "SE1", "slName": "Ha Noi", "saName": "Sai Gon", "dateLeave": "01/05 08:00", "typeSeat": "NCL", "carOrdinal": "1", "seatOrdinal": "1", "ticketID": "1", "ownTime": "123", "tripID": "1", "stationIDLeave": "1", "stationIDArrive": "3"}]
        $userID = Auth::User()->user_id;
        $query = 'SELECT ticket_id, trip_id, station_leave_id, station_arrive_id, own_time FROM ticket_sold WHERE user_id = '.$userID.' AND state = "W"';
        $result = DB::select($query);

        $json = '[';
        foreach ($result as $ts) {

            $trainName = '';
            $slName = '';
            $saName = '';
            $dateLeave = '';
            $typeSeat = 'NCL';
            $carOrdinal = '';
            $seatOrdinal = '';

            //TrainName
            $query = 'SELECT name FROM train a inner join(SELECT train_id FROM trip WHERE trip_id = '.$ts->trip_id.' ) i on i.train_id = a.train_id';
            $name = DB::select($query);
            if(count($name)==0){
                $trainName = 'No Name';
            }
            else{
                $trainName = $name[0]->name;
            }

            //slName
            $query = 'SELECT name FROM station WHERE station_id = '.$ts->station_leave_id;
            $name = DB::select($query);
            if(count($name)==0){
                $slName = 'No Name';
            }
            else{
                $slName = $name[0]->name;
            }

            //saName
            $query = 'SELECT name FROM station WHERE station_id = '.$ts->station_arrive_id;
            $name = DB::select($query);
            if(count($name)==0){
                $saName = 'No Name';
            }
            else{
                $saName = $name[0]->name;
            }

            //dateLeave
            $query = 'SELECT date_format(date_leave, "%d/%m %H:%i") as date_leave FROM station_stop WHERE station_id= '.$ts->station_leave_id.' AND trip_id= '.$ts->trip_id;
            $date = DB::select($query);
            if(count($date)==0){
                $dateLeave = 'No Date';
            }
            else{
                $dateLeave = $date[0]->date_leave;
            }

            //carOrdinal
            $query = 'SELECT ordinal FROM car c inner join(SELECT car_id FROM tickets WHERE ticket_id = '.$ts->ticket_id.') t on t.car_id = c.car_id';
            $ordinal = DB::select($query);
            if(count($ordinal)==0){
                $carOrdinal = 'No Ordinal';
            }
            else{
                $carOrdinal = $ordinal[0]->ordinal;
            }

            //seatOrdinal
            $query = 'SELECT ordinal FROM tickets WHERE ticket_id = '.$ts->ticket_id;
            $ordinal = DB::select($query);
            if(count($ordinal)==0){
                $seatOrdinal = 'No Ordinal';
            }
            else{
                $seatOrdinal = $ordinal[0]->ordinal;
            }

            $json .= '{"trainName": "'.$trainName.'", "slName": "'.$slName.'", "saName": "'.$saName.'", "dateLeave": "'.$dateLeave.'", "typeSeat": "'.$typeSeat.'", "carOrdinal": "'.$carOrdinal.'", "seatOrdinal": "'.$seatOrdinal.'", "ownTime": "'.$ts->own_time.'", "ticketID": "'.$ts->ticket_id.'", "tripID": "'.$ts->trip_id.'", "stationIDLeave": "'.$ts->station_leave_id.'", "stationIDArrive": "'.$ts->station_arrive_id.'"}';
            if($ts!=end($result)){
                    $json .= ', ';
            }
        }
        $json .= ']';
        return Utils::createResponse(0, $json);
    }
    function deleteTicketSold($tripID, $ticketID, $SIL, $SIA){
        $query = "DELETE FROM ticket_sold WHERE trip_id = ".$tripID." AND ticket_id = ".$ticketID." AND station_leave_id = ".$SIL." AND station_arrive_id=".$SIA;
        DB::select($query);
    }
}
