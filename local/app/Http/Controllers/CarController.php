<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarAddRequest;
use App\Http\Requests\CarEditRequest;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;
use App\Type_Seat;
use App\Car;
class CarController extends Controller
{
    public function getCarAdd(){
        $data = Type_Seat::select('type_seat_id','name')->get()->toArray();
        return view('admin\car\car-add',['data' => $data]);
    }
    public function postCarAdd(CarAddRequest $requests){
    	$car = new Car;
    	$car->name = $requests->txtCarName;
    	$car->num_seat = $requests->txtNumSeat;
    	$car->type_seat_id = $requests->sltCar;
    	$car->save();
    	return redirect()->route('getCarList')->with(['flash_level'=> 'result_msg', 'flash_message'=> 'Thêm Toa Tàu thành công']);
    }
    public function getCarList(){
        $data = Car::select('car_id','name','num_seat','type_seat_id')->get()->toArray();
        return view('admin\car\car-list',['data' => $data]);
    }
    public function getCarDelete($id){
        $car = Car::find($id);
        $car->delete($id);
        return redirect()-> route('getCarList')->with(['flash_level' => 'result_msg','flash_message' => 'Xóa Toa Tàu thành công']);
    }
    public function getCarEdit($id){
        $data =Car:: find($id)->toArray();
        $data1 = Type_Seat::select('type_seat_id','name')->get()->toArray();
        return view('admin\car\car-update',['data' => $data, 'data1' =>$data1]);
    }
    public function postCarEdit(CarEditRequest $requests,$id){
        $car = Car::find($id);
        $car->name = $requests->txtCarName;
        $car->num_seat = $requests->txtNumSeat;
        $car->type_seat_id = $requests->sltCar;
        $car->save();
        return redirect()->route('getCarList')->with(['flash_level'=> 'result_msg', 'flash_message'=> 'Sửa Toa Tàu thành công']);
    }
}

