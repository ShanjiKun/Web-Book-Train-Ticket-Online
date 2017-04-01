<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
//use App\Http\Middleware;
class LoginController extends Controller
{
    public function getLogin(){
        if(!Auth::check()){
            return view('admin\Login\login');
        }
        else{
            return redirect()->route('admin');
        }
        
    	
    }
    public function postLogin(LoginRequest $request){
    	$login = [
				'username' => $request->txtUser, 
				'password' => $request->txtPass
		];
    	if (Auth::attempt($login) && Auth::User()->level ==1) {
            // Authentication passed...
            return redirect()->route('admin');

        }
        else if (Auth::attempt($login) && Auth::User()->level ==2) {
            // Authentication passed...
            return redirect()->route('admin1');

        }
        else{
        	return redirect()->back();
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('getLogin');

    }
}
