<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrainAddRequest;
use App\Http\Requests\TrainEditRequest;
use App\Train;
class TrainController extends Controller
{
    public function getTrainAdd(){
    	return view('admin/train/train-add');
    }
    public function postTrainAdd(TrainAddRequest $request){
    	$train = new Train;
    	$train -> name = $request -> txtTrainName;
    	$train -> save();
    	return redirect()-> route('getTrainList')->with(['flash_level' => 'result_msg','flash_message' => 'Thêm tàu thành công']);
    }
    public function getTrainList(){
    	$data = Train::select('train_id','name')->get()->toArray();
    	return view('admin/train/train-list',['data' => $data]);
    }
    public function getTrainDelete($id){
        $train = Train::find($id);
        $train->delete($id);
        return redirect()-> route('getTrainList')->with(['flash_level' => 'result_msg','flash_message' => 'Xóa tàu thành công']);
    }
    public function getTrainEdit($id){
        $data = Train::find($id)->toArray();
        return view('admin/train/train-update',['data' => $data]);

    }
    public function postTrainEdit(TrainEditRequest $request, $id){
        $train = Train::find($id);
        $train -> name = $request -> txtTrainName;
        $train -> save();
        return redirect()-> route('getTrainList')->with(['flash_level' => 'result_msg','flash_message' => 'Sửa tàu thành công']);
    }
}
