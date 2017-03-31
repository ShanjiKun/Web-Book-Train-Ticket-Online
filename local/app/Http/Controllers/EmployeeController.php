<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeAddRequest;
use App\Http\Requests\EmployeeEditRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
class EmployeeController extends Controller
{
    public function getEmployeeAdd(){
    	return view('admin\employee\employee_add');
    }
    public function postEmployeeAdd(EmployeeAddRequest $requests){
    	$user = new User;
        $user->employee_id= $requests->txtId;
    	$user->name = $requests->txtName;
    	$user->username = $requests->txtUser;
    	$user->password = $requests->txtPass;
    	$user->save();
    	return redirect()->route('getEmployeeList')->with(['flash_level'=> 'result_msg', 'flash_message'=> 'Thêm nhân viên thành công']);
    }
    public function getEmployeeList(){
        $data = User::select('employee_id','name')->get()->toArray();
        return view('admin\employee\employee_list',['data' => $data]);
    }
    public function getEmployeeDelete($id){
        $user = User::find($id);
        $user->delete($id);
        return redirect()-> route('getEmployeeList')->with(['flash_level' => 'result_msg','flash_message' => 'Xóa nhân viên thành công']);
    }
    public function getEmployeeEdit($id){
        $data =User:: find($id)->toArray();
        return view('admin\employee\employee_update',['data' => $data]);
    }
    public function postEmployeeEdit(EmployeeEditRequest $requests,$id){
        $user = User::find($id);
        $user->name = $requests->txtName;
        $user->username = $requests->txtUser;
        $user->password = $requests->txtPass;
        $user->save();
        return redirect()->route('getEmployeeList')->with(['flash_level'=> 'result_msg', 'flash_message'=> 'Sửa nhân viên thành công']);
    }
}
