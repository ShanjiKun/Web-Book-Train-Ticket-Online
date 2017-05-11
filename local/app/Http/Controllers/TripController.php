<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TripAddRequest;
use App\Http\Requests\TripEditRequest;
use Illuminate\Support\Facades\Auth;
use App\Train;
use App\Station;
use App\Trip;
use DateTime;
use DB;
class TripController extends Controller
{
    public function getTripAdd(){
    	$data = Train::select('train_id','name')->where ('state' ,'E')->get()->toArray();
    	$data1 = Station::select('station_id','name')->where ('state' ,'E')->get()->toArray();
    	return view('admin\trip\trip-add',['data' => $data, 'data1' =>$data1]);
    }
    
    public function AddTime($i, $j,$k){ //$k = $i -1 hoac $k = $i +1
        $trip = DB:: table('station_stop')->where([['trip_id',$j],['station_id',$k]])
            ->select('date_leave')
            ->get()->toArray();
        $data1 = DB::table('station')->where('station_id',$i)
            ->select('distance')
            ->get()->toArray();
        $data2 = DB::table('station')->where('station_id',$k)
            ->select('distance')
            ->get()->toArray();
        $data3 = (abs($data1[0]->distance - $data2[0]->distance))/48.5*60*60;
        //$data3 = ($data1[0]->distance - $data2[0]->distance)/48.5*60*60;
        $date = new DateTime($trip[0]->date_leave);
        $timestamp = $date->getTimestamp();//Unit is second
        //$sec = 15*60;//Unit is second
        $timestamp += $data3;

        $date->setTimestamp($timestamp);
        $dateStr = $date->format('Y-m-d H:i:s');
        return $dateStr;
    }
    public function AddTimeLeave($data){
        $date = new DateTime($data);
        $timestamp = $date->getTimestamp();//Unit is second
        $sec = 15*60;//Unit is second
        $timestamp += $sec;

        $date->setTimestamp($timestamp);
        $dateStr = $date->format('Y-m-d H:i:s');
        return $dateStr;
    }
    public function TimeSell($data){
        $date = new DateTime($data);
        $timestamp = $date->getTimestamp();//Unit is second
        $sec = 120*60*60;//Unit is second
        $timestamp -= $sec;

        $date->setTimestamp($timestamp);
        $dateStr = $date->format('Y-m-d H:i:s');
        return $dateStr;
    }
    
    public function postTripAdd(TripAddRequest $request){
    	$trip = new Trip;
    	$trip -> train_id = $request -> sltTrain;
    	$trip -> station_leave_id = $request -> sltStationLeave;
    	$trip -> station_arrive_id = $request -> sltStationArrive;
        $trip -> date_leave = $request -> txtDateLeave.' '.$request -> txtTimeLeave;
        $trip -> date_arrive = $request -> txtDateLeave.' '.$request -> txtTimeLeave;
        $trip -> date_sell = $this->TimeSell($trip -> date_leave);
        $trip -> user_id = Auth::User() -> user_id;
    	$trip -> save();
        if($trip -> station_leave_id < $trip -> station_arrive_id){
            DB::table('station_stop')->insert(
                                                ['trip_id' => $trip ->trip_id, 'station_id' => $trip -> station_leave_id,'date_arrive'=>$trip -> date_leave, 'date_leave'=>$trip -> date_leave]
                                            );
            for($i=$trip -> station_leave_id + 1; $i<=$trip -> station_arrive_id; $i++){
                if($i != $trip -> station_arrive_id){
                    DB::table('station_stop')->insert(
                                                ['trip_id' => $trip ->trip_id, 'station_id' => $i,'date_arrive'=> $this->AddTime($i,$trip ->trip_id,$i-1),'date_leave'=> $this->AddTimeLeave($this->AddTime($i,$trip ->trip_id,$i-1))]
                                            );
                }
                else{
                    DB::table('station_stop')->insert(
                                                ['trip_id' => $trip ->trip_id, 'station_id' => $i,'date_arrive'=> $this->AddTime($i,$trip ->trip_id,$i-1),'date_leave'=>$this->AddTime($i,$trip ->trip_id,$i-1)]
                                            );
                }

            }
            DB::table('trip')
            ->where('trip_id', $trip ->trip_id)
            ->update(['date_arrive' => $this->AddTime($trip -> station_arrive_id ,$trip ->trip_id,$trip -> station_arrive_id -1)]);
        }
        else{
            DB::table('station_stop')->insert(
                                                ['trip_id' => $trip ->trip_id, 'station_id' => $trip -> station_leave_id,'date_arrive'=>$trip -> date_leave, 'date_leave'=>$trip -> date_leave]
                                            );
            for($i=$trip -> station_leave_id - 1; $i>=$trip -> station_arrive_id; $i--){
                if($i != $trip -> station_arrive_id){
                    DB::table('station_stop')->insert(
                                                ['trip_id' => $trip ->trip_id, 'station_id' => $i,'date_arrive'=> $this->AddTime($i,$trip ->trip_id,$i+1),'date_leave'=> $this->AddTimeLeave($this->AddTime($i,$trip ->trip_id,$i+1))]
                                            );
                }
                else{
                    DB::table('station_stop')->insert(
                                                ['trip_id' => $trip ->trip_id, 'station_id' => $i,'date_arrive'=> $this->AddTime($i,$trip ->trip_id,$i+1),'date_leave'=>$this->AddTime($i,$trip ->trip_id,$i+1)]
                                            );
                }

            }
            DB::table('trip')
            ->where('trip_id', $trip ->trip_id)
            ->update(['date_arrive' => $this->AddTime($trip -> station_arrive_id ,$trip ->trip_id,$trip -> station_arrive_id +1)]);
        }
    	return redirect()-> route('getTripList')->with(['flash_level' => 'result_msg','flash_message' => 'Thêm ga chuyến tàu thành công']);
    }
    public function getTripList(){
    	//$data = Trip::select('trip_id','train_id','station_leave_id','station_arrive_id','user_id','date_leave','date_arrive')->get()->toArray();
        $data = DB::table('trip AS m')->where('m.state','E')
            ->join('train', 'm.train_id', '=', 'train.train_id')
            ->join('station AS x', 'm.station_leave_id', '=', 'x.station_id')
            ->join('station AS y','m.station_arrive_id', '=', 'y.station_id')
            ->join('users','m.user_id','=','users.user_id')
            ->select('m.trip_id','train.name','x.name AS t','y.name AS s', 'm.date_leave','m.date_arrive','m.date_sell','users.name AS n')
            ->orderBy('m.trip_id', 'ASC')
            ->get()->toArray();
    	return view('admin/trip/trip-list',['data' => $data]);
    }
    public function getTripDelete($id){
        $trip = new Trip;
        $a = time(); 
        $data = DB::select('SELECT UNIX_TIMESTAMP(date_sell) as date_sell FROM trip WHERE trip_id = '.$id);
        $b = $data[0]->date_sell;
        if($a >= $b){
            return redirect()-> route('getTripList')->with(['flash_level' => 'result_msg','flash_message' => 'Không được xóa']);

        }
        else{
            $trip->where('trip_id', $id)->update(array('state' => 'D')); 
            return redirect()-> route('getTripList')->with(['flash_level' => 'result_msg','flash_message' => 'Xóa Chuyến Tàu thành công']);

        }
        // $trip->where('trip_id', $id)->update(array('state' => 'D')); 
        //     return redirect()-> route('getTripList')->with(['flash_level' => 'result_msg','flash_message' => 'Xóa Chuyến Tàu thành công']);

    }
    public function getTripEdit($id){
        $trip = new Trip;
        $data =Trip:: find($id)->toArray();
        $data1 = Train::select('train_id','name')->where('state','E')->get()->toArray();
        $data2 = Station::select('station_id','name')->where('state','E')->get()->toArray();

        $a = time(); 
        $date = DB::select('SELECT UNIX_TIMESTAMP(date_sell) as date_sell FROM trip WHERE trip_id = '.$id);
        $b = $date[0]->date_sell;
        if($a >= $b){
            return redirect()-> route('getTripList')->with(['flash_level' => 'result_msg','flash_message' => 'Không được sửa']);

        }
        else{
            return view('admin\trip\trip-update',['data' => $data, 'data1' =>$data1,'data2' =>$data2]);
        }
        
    }
    public function postTripEdit(TripEditRequest $request,$id){
        $trip = Trip::find($id);
        $trip -> train_id = $request -> sltTrain;
        $trip -> station_leave_id = $request -> sltStationLeave;
        $trip -> station_arrive_id = $request -> sltStationArrive;
        $trip -> date_leave = $request -> txtDateLeave.' '.$request -> txtTimeLeave;
        $trip -> date_sell = new DateTime();
        $trip -> user_id = Auth::User() -> user_id;
        $trip -> save();
        return redirect()->route('getTripList')->with(['flash_level'=> 'result_msg', 'flash_message'=> 'Sửa Chuyến Tàu thành công']);
    }
    
}
