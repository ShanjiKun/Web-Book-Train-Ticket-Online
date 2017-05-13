<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StationAddRequest;
use App\Http\Requests\StationEditRequest;
use App\Station;
use App\Train;

class StationController extends Controller
{
    public function getStationAdd(){
    	return view('admin/station/station-add');
    }
    public function postStationAdd(StationAddRequest $request){
    	$station = new Station;
    	$station -> name = $request -> txtStationName;
    	$station -> city = $request -> txtCity;
    	$station -> address = $request -> txtAddress;
    	$station -> distance = $request -> txtDistance;
    	try {
            
            $station->save();
        } catch (\Exception $e) {
            $errorCode = $e->getCode();
            if($errorCode == 23000)
                return redirect()->back()->withErrors(['error' => 'Tên Ga đã tồn tại!']);
            return redirect()->back()->withErrors(['error' => 'Something went wrong!']);
        }
    	return redirect()-> route('getStationList')->with(['flash_level' => 'result_msg','flash_message' => 'Thêm ga tàu thành công']);
    }
    public function getStationList(){
    	$data = Station::select('station_id','name','city','address','distance')->where ('state','E')->get()->toArray();
    	return view('admin/station/station-list',['data' => $data]);
    }
    public function getStationDelete($id){
    	$station = Station::find($id);
    	$station->where('station_id', $id)->update(array('state' => 'D')); 
    	return redirect()-> route('getStationList')->with(['flash_level' => 'result_msg','flash_message' => 'Xóa ga tàu thành công']);
    }
    public function getStationEdit($id){
        $data = Station::find($id)->toArray();
        return view('admin/station/station-update',['data' => $data]);

    }
    public function postStationEdit(StationEditRequest $request,$id){
        $station = Station::find($id);
        $station -> name = $request -> txtStationName;
        $station -> city = $request -> txtCity;
        $station -> address = $request -> txtAddress;
        $station -> distance = $request -> txtDistance;
        try {
            
            $station->save();
        } catch (\Exception $e) {
            $errorCode = $e->getCode();
            if($errorCode == 23000)
                return redirect()->back()->withErrors(['error' => 'Tên Ga đã tồn tại!']);
            return redirect()->back()->withErrors(['error' => 'Something went wrong!']);
        }
        return redirect()-> route('getStationList')->with(['flash_level' => 'result_msg','flash_message' => 'Sửa ga tàu thành công']);
    }
}
