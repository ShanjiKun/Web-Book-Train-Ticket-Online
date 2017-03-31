<?php

namespace App\Http\Controllers\database;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Utils\Utils;

class DatabaseController extends Controller
{
    public function searchTrip(Request $request){

        $stationLeave = $request->input('stationLeave');
        $stationArrive = $request->input('stationArrive');
        $indexOfRound = $request->input('indexOfRound');
        $dateLeave = $request->input('dateLeave'); //string date Y-m-d
        $dateRound = $request->input('dateRound'); //string date Y-m-d
        $timeLeave = $request->input('timeLeave'); //string time H:i
        $timeRound = $request->input('timeRound'); //string time H:i 

        $query = "SELECT sl.trip_id FROM STATION_STOP sl inner join (SELECT ss.trip_id, ss.station_id, ss.date_arrive FROM STATION_STOP ss WHERE date_format(ss.date_arrive, '%Y-%m-%d') >= str_to_date('".$dateLeave."', '%Y-%m-%d') AND ss.station_id = '".$stationArrive."') as sa ON sl.trip_id = sa.trip_id WHERE date_format(sl.date_leave, '%Y-%m-%d') = str_to_date('".$dateLeave."', '%Y-%m-%d') AND sl.station_id = '".$stationLeave."' ORDER BY sl.date_leave";
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

        return Utils::createResponse( 1, null);
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
        return Utils::createResponse( 1, null);
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
        return Utils::createResponse( 1, null);
    }
    public function getNumberSeat(Request $request){
        //Input: 'stationIDLeave': '1', 'stationIDArrive': '3', "trips":[{"trip_id":"1"}, {"trip_id":"2"}]
        //Output: [{'trip_id':'1', 'unavailableSeat':'12', 'availableSeat':'60'}]

        $stationIDLeave = $request->stationIDLeave;
        $stationIDArrive = $request->stationIDArrive;
        $trips = json_decode($request->trips, true); // Array dictionary

        $conditions1 = 'tc.trip_id = '.$trips[0]['trip_id'];
        $conditions2 = 'trip_id = '.$trips[0]['trip_id'];
        for( $i = 1; $i < count($trips); $i++ ){
            $conditions1 = $conditions1.' OR tc.trip_id = '.$trips[$i]['trip_id'];
            $conditions2 = $conditions2.' OR trip_id = '.$trips[$i]['trip_id'];
        }

        //Query get number of seat in trip
        $query = "SELECT tc.trip_id, SUM(c.num_seat) as number_seat FROM `trip_car` tc INNER JOIN car c on tc.car_id = c.car_id where ".$conditions1." GROUP BY tc.trip_id";
        $numberSeats = DB::select($query);

        if(!$numberSeats) return Utils::createResponse( 1, null);

        //Query get number of unavailable seat in trip
        $saCondition = '<=';
        if($stationIDArrive - $stationIDLeave < 0){
            //Heading is NS
            $saCondition = '>=';
        }

        $query = "SELECT trip_id, count(ticket_id) as unavailable_seat FROM `ticket_sold` WHERE (".$conditions2.") and station_leave_id = ".$stationIDLeave." AND station_arrive_id ".$saCondition." ".$stationIDArrive." GROUP BY trip_id";
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
        //Output: { "code":"0", "message":"success", "data":[{"car_id":"1", "type":"B80", "status":"0"}, {"car_id":"2", "type":"B80L", "status":"1"}]}
        $tripID = $request->tripID;
        $stationIDLeave = $request->stationIDLeave;
        $stationIDArrive = $request->stationIDArrive;

        $query = "SELECT c.car_id, c.type_seat_id as type FROM car c inner JOIN (SELECT * FROM `trip_car` WHERE trip_id = :tripID) tc on c.car_id = tc.car_id ORDER BY `c`.`num_seat` DESC";
        $cars = DB::select($query, ['tripID' => $tripID]);

        //Car status
        //0: available
        //1: unavailable
        //2: full seat
        if($cars){
            $today = time();
            $json = '[';
            foreach ($cars as $car) {
                $query = "SELECT UNIX_TIMESTAMP(t.date_sell) as dateSell FROM trip t WHERE t.trip_id = :tripID";
                $dateSell = DB::select($query, ['tripID'=>$tripID])[0]->dateSell;

                $status = '1';
                if($today >= $dateSell){
                    $saCondition = '<=';
                    if($stationIDArrive - $stationIDLeave < 0){
                        //Heading is NS
                        $saCondition = '>=';
                    }

                    $query = "SELECT COUNT(ts.ticket_id) as numSoldTicket, t.num_seat FROM ticket_sold ts INNER JOIN (SELECT t.ticket_id, t.car_id, c.num_seat FROM `tickets` t INNER JOIN car c on t.car_id = c.car_id WHERE c.car_id = ".$car->car_id.") t ON ts.ticket_id = t.ticket_id WHERE ts.trip_id = ".$tripID." AND station_leave_id = ".$stationIDLeave." AND station_arrive_id ".$saCondition." ".$stationIDArrive." GROUP BY t.car_id";

                    $result = DB::select($query);
                    if($result){
                        $result = $result[0];
                        $numSoldTicket = $result->numSoldTicket;
                        $num_seat = $result->num_seat;
                        if($numSoldTicket < $num_seat){
                            $status = '0';
                        }else{
                            $status = '2';
                        }
                    }else{
                        $status = '0';
                    }
                }
                $json .= '{"car_id":"'.$car->car_id.'", "type":"'.$car->type.'", "status":"'.$status.'"}';
                if($car!=end($cars)){
                    $json .= ', ';
                }
            }
            $json .= ']';
            return Utils::createResponse( 0, $json);
        }else{
            return Utils::createResponse( 1, null);
        }
        
    }
}
