<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Utils\Utils;
use Illuminate\Support\Facades\DB;
use Hash;
//use App\Http\Middleware;
class LoginController extends Controller
{
    public function getLogin(){
        if(!Auth::check()){
            return view('admin\Login\login');
        }
        else{
            // return redirect()->route('admin');
            switch (Auth::User()->level) {
                case 0:
                    return redirect()->route('search');
                    break;
                case 1:
                    return redirect()->route('admin');
                    break;
                case 2:
                    return redirect()->route('admin1');
                    break;
                default:
                    break;
            }
        }
    }
    public function postLogin(LoginRequest $request){

        $username = $request->txtUser;
        $password = $request->txtPass;

        if(empty($username) || strlen($username) < 6 || strlen($username) > 12 || !$this->validateSC($username)){
            return redirect()->back()->withErrors(['error' => 'Tên đăng nhập không hợp lệ!']);
        }
        if(empty($password) || strlen($password) < 6 || strlen($password) > 12 || !$this->validateSC($password)){
            return redirect()->back()->withErrors(['error' => 'Mật khẩu không hợp lệ!']);
        }

    	$login = [
				'username' => $username, 
				'password' => $password
		];

    	if (Auth::attempt($login)) {
            // Authentication passed...
            switch (Auth::User()->level) {
                case 0:
                    return redirect()->route('search');
                    break;
                case 1:
                    return redirect()->route('admin');
                    break;
                case 2:
                    return redirect()->route('admin1');
                    break;
                default:
                    break;
            }
        }
        else{
        	return redirect()->back()->withErrors(['error' => 'Tên đăng nhập hoặc mật khẩu không đúng!']);
        }
    }
    public function getLogout(){
        Auth::logout();
        // return redirect()->route('getLogin');
        return redirect()->route('search');

    }
    public function getUser(){
        if(!Auth::check()){
            return Utils::createResponse( 1, '{}');
        }
        return Utils::createResponse( 0, Auth::user());
    }

    public function getSignUp(){
        return view('admin\login\sign-up');
    }

    public function postSignUp(Request $request){

        $name = $request->txtName;
        $username = $request->txtUser;
        $email = $request->email;
        $password = $request->txtPass;
        $repass = $request->txtRepass;

        $res = $this->validateSignUp($name, $username, $email, $password, $repass);
        if($res!='success') return redirect()->back()->withErrors(['error' => $res]);

        $res = DB::SELECT('SELECT user_id FROM users WHERE username = "'.$username.'" AND email = "'.$email.'"');
        if(count($res)>0) return redirect()->back()->withErrors(['error' => 'Email hoặc tên đăng nhập đã tồn tại!']);

        $user = new User;
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->level = 0;
        $user->save();

        $login = [
                'username' => $username, 
                'password' => $password
        ];
        
        if (Auth::attempt($login)) {
            // Authentication passed...
            switch (Auth::User()->level) {
                case 0:
                    return redirect()->route('search');
                    break;
                case 1:
                    return redirect()->route('admin');
                    break;
                case 2:
                    return redirect()->route('admin1');
                    break;
                default:
                    break;
            }
        }
        else{
            return redirect()->back()->withErrors(['error' => 'Something went wrong!']);
        }
    }

    function validateSignUp($name, $username, $email, $password, $repass){
        if(empty($name) || strlen($name) < 3 || strlen($name) > 30 || !$this->validateSC($name)){
            return 'Tên không hợp lệ';
        }
        if(empty($username) || strlen($username) < 6 || strlen($username) > 12 || !$this->validateSC($username)){
            return 'Tên đăng nhập không hợp lệ';
        }
        if(empty($email) || strlen($email) < 10 || strlen($email) > 100 || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            return 'Email không hợp lệ';
        }
        if(empty($password) || strlen($password) < 6 || strlen($password) > 12 || !$this->validateSC($password)){
            return 'Mật khẩu không hợp lệ';
        }
        if($password != $repass){
            return 'Mật khẩu không trùng!';
        }
        return 'success';
    }

    function validateSC($string){
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string))
        {
            return false;
        }
        return true;
    }
}
