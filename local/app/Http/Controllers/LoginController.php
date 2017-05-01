<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Utils\Utils;
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
    	$login = [
				'username' => $request->txtUser, 
				'password' => $request->txtPass
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
        	return redirect()->back();
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
}
