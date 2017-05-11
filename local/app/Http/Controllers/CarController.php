<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarAddRequest;
use App\Http\Requests\CarEditRequest;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;
use App\Type_Seat;
use App\Car;
use App\Train;
use App\Tickets;
use DB;
class CarController extends Controller
{
    public function getCarAdd(){
        $data = Type_Seat::select('type_seat_id','name')->get()->toArray();
        $data1 = Train::select('train_id','name')->where('state','E')->get()->toArray();
        return view('admin\car\car-add',['data' => $data , 'data1'=>$data1]);
    }
    public function postCarAdd(CarAddRequest $requests){
    	$car = new Car;
    	$car->name = $requests->txtCarName;
    	$car->num_seat = $requests->txtNumSeat;
        $car->train_id = $requests->sltTrain;
    	$car->type_seat_id = $requests->sltCar;
        $car->ordinal = $requests->txtOr;
    	$car->save();
        
        for($i=1; $i<= $car->num_seat; $i++){
            DB::table('tickets')->insert(
                                            ['car_id' => $car ->car_id, 'ordinal' => $i]
                                        );

        }

    	return redirect()->route('getCarList')->with(['flash_level'=> 'result_msg', 'flash_message'=> 'Thêm Toa Tàu thành công']);
    }
    public function getCarList(){
        //$data = Car::select('car_id','name','num_seat','train_id','type_seat_id','ordinal')->get()->toArray();//join->tên tàu
        
        $data = DB::table('car AS c')->where('c.state','E')
            ->join('train', 'c.train_id', '=', 'train.train_id')
            ->join('type_seat', 'c.type_seat_id', '=', 'type_seat.type_seat_id')
            
            ->select('c.car_id','c.name','c.num_seat','train.name AS t','type_seat.name AS s', 'c.ordinal')
            ->orderBy('c.car_id', 'ASC')
            ->get()->toArray();
        return view('admin\car\car-list',['data'=> $data]);
    }
    public function getCarDelete($id){
        $car = new Car;
        $car->where('car_id', $id)->update(array('state' => 'D')); 
        return redirect()-> route('getCarList')->with(['flash_level' => 'result_msg','flash_message' => 'Xóa Toa Tàu thành công']);
    }
    public function getCarEdit($id){
        $data =Car:: find($id)->toArray();
        $data2 = Train::select('train_id','name')->where('state','E')->get()->toArray();
        $data1 = Type_Seat::select('type_seat_id','name')->get()->toArray();
        return view('admin\car\car-update',['data' => $data, 'data1' =>$data1,'data2' =>$data2]);
    }
    public function postCarEdit(CarEditRequest $requests,$id){
        $ticket = new Tickets;
        $car = Car::find($id);
        $car->name = $requests->txtCarName;
        $car->num_seat = $requests->txtNumSeat;
        $car->train_id = $requests->sltTrain;
        $car->type_seat_id = $requests->sltCar;
        $car->ordinal = $requests->txtOr;
        $car->save();
        $ticket->where('car_id', $id)->update(array('state' => 'D')); 
        for($i=1; $i<= $car->num_seat; $i++){
            DB::table('tickets')->insert(
                                            ['car_id' => $car ->car_id, 'ordinal' => $i]
                                        );
            // DB::table('tickets')
            // ->where('car_id', $car ->car_id)
            // ->update(['ordinal' => '$i']);


        }
        return redirect()->route('getCarList')->with(['flash_level'=> 'result_msg', 'flash_message'=> 'Sửa Toa Tàu thành công']);
    }
}

