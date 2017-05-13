<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;
//use Illuminate\Support\Facades\Auth;
use App\Bill;
use DB;
class PaymentController extends Controller
{
    public function getPayment(){
        return view('admin\Bill\payment');
    }
    public function postPayment(PaymentRequest $requests){
    	$billID = $requests ->txtId;
    	$transactionID = $billID.time();
		$bill = Bill::find($billID);
        if(empty($bill)) return redirect()->back()->withErrors(['error' => 'Mã thanh toán không hợp lệ!']);
        $bill->transaction_id = $transactionID;
        $bill->own_time = 0;
        $bill->save();

    	return redirect()->route('getBillList')->with(['flash_level'=> 'result_msg', 'flash_message'=> 'Thanh toán thành công']);
    }
    public function getBillList(){
        //$data = Car::select('car_id','name','num_seat','train_id','type_seat_id','ordinal')->get()->toArray();//join->tên tàu
        
        $data = DB::table('bill AS b')
            ->join('users', 'b.user_id', '=', 'users.user_id')
            ->select('b.bill_id','users.name','b.transaction_id','b.sum_fare')
            ->orderBy('b.bill_id', 'ASC')
            ->get()->toArray();
        return view('admin\Bill\bill-list',['data'=> $data]);
    }
}

