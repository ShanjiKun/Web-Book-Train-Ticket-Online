<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeAddRequest;
use App\Http\Requests\EmployeeEditRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
class EmployeeController extends Controller
{
    public function getEmployeeAdd(){
    	return view('admin\employee\employee_add');
    }
    public function postEmployeeAdd(EmployeeAddRequest $requests){
    	$user = new User;
    	$user->name = $requests->txtName;
    	$user->username = $requests->txtUser;
        $user->email = $requests->email;
    	$user->password = Hash::make($requests->txtPass);
        $user->level = $requests ->rdoLevel;
        // var letters = /^[A-Za-z]+$/;  
        //    if(inputtxt.value.match(letters))  
        //      {  
        //       return true;  
        //      }  
        //    else  
        //      {  
        //      alert("message");  
        //      return false;  
        //      }

    	try {
            
            $user->save();
        } catch (\Exception $e) {
            $errorCode = $e->getCode();
            if($errorCode == 23000)
                return redirect()->back()->withErrors(['error' => 'Username đã tồn tại!']);
            return redirect()->back()->withErrors(['error' => 'Something went wrong!']);
        }
    	return redirect()->route('getEmployeeList')->with(['flash_level'=> 'result_msg', 'flash_message'=> 'Thêm nhân viên thành công']);
    }
    public function getEmployeeList(){
        $data = User::select('user_id','name','email','level')->where([['state', 'E'],['level', '<>', '0']])->get()->toArray();
        
        return view('admin\employee\employee_list',['data' => $data]);
    }
    public function getEmployeeDelete($id){
        $user = User::find($id);
        $user->where('user_id', $id)->update(array('state' => 'D')); 
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
        $user->email = $requests->email;
        $user->password = Hash::make($requests->txtPass);
        try {
            
            $user->save();
        } catch (\Exception $e) {
            $errorCode = $e->getCode();
            if($errorCode == 23000)
                return redirect()->back()->withErrors(['error' => 'Username đã tồn tại!']);
            return redirect()->back()->withErrors(['error' => 'Something went wrong!']);
        }
        return redirect()->route('getEmployeeList')->with(['flash_level'=> 'result_msg', 'flash_message'=> 'Sửa nhân viên thành công']);
    }
    public function getUserList(){
        $data = User::select('user_id','name','email')->where([['state', 'E'],['level', '0']])->get()->toArray();
        
        return view('admin\employee\user_list',['data' => $data]);
    }
    public function getUserDelete($id){
        $user = User::find($id);
        $user->where('user_id', $id)->update(array('state' => 'D')); 
        return redirect()-> route('getUserList')->with(['flash_level' => 'result_msg','flash_message' => 'Xóa hành khách thành công']);
    }
}
