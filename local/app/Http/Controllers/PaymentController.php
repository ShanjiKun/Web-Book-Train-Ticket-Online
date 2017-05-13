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
        if($bill == null) return redirect()->back()->withErrors(['error' => 'Đơn hàng không hợp lệ!']);
        if($bill->transaction_id != null) return redirect()->back()->withErrors(['error' => 'Đơn hàng đã thanh toán!']);
        if($bill->state == 'C') return redirect()->back()->withErrors(['error' => 'Đơn hàng đã hủy trước đó!']);

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

    public function getAdminRefund(){
        return view('admin\Bill\admin-refund');
    }

    public function postAdminRefund(PaymentRequest $request){
        $billID = $request->txtId;

        if(empty($billID)) return redirect()->back()->withErrors(['error' => 'Mã đơn hàng trống!']);


        $res = DB::SELECT('SELECT transaction_id, state FROM bill WHERE bill_id = '.$billID);

        if(count($res) == 0) return redirect()->back()->withErrors(['error' => 'Đơn hàng không hợp lệ!']);
        if($res[0]->transaction_id == null) return redirect()->back()->withErrors(['error' => 'Đơn hàng chưa thanh toán!']);
        if($res[0]->state == 'C') return redirect()->back()->withErrors(['error' => 'Đơn hàng hủy trước đó!']);

        $tc = DB::SELECT('SELECT ticket_cart_id, payment_type FROM ticket_cart WHERE bill_id = '.$billID);
        if(count($tc) == 0) return redirect()->back()->withErrors(['error' => 'Đơn hàng đã hủy trước đó!']);
        if($tc[0]->payment_type == 1) return redirect()->back()->withErrors(['error' => 'Đơn hàng là thanh toán online!']);
        foreach ($tc as $item) {
            $tcID = $item->ticket_cart_id;
            $tripID = explode('-', $tcID)[1];
            $trip = DB::SELECT('SELECT UNIX_TIMESTAMP(date_leave) as sl FROM trip WHERE trip_id = '.$tripID)[0];
            $sec = $trip->sl - time();
            $h = $sec/60/60;
            if($h < 48){
                return redirect()->back()->withErrors(['error' => 'Thời gian trả vé cách thời gian tàu chạy 48 tiếng!']);
            }
        }

        $ts = DB::select("SELECT ticket_cart_id FROM ticket_cart WHERE bill_id = ".$billID);
        if(count($ts) > 0){
            foreach ($ts as $item) {
                $query = "DELETE FROM ticket_sold WHERE ticket_cart_id = '".$item->ticket_cart_id."'";
                DB::select($query);
                $query = "DELETE FROM ticket_cart WHERE ticket_cart_id = '".$item->ticket_cart_id."'";
                DB::select($query);
            }
        }
        $query = "UPDATE bill SET state = 'C' WHERE bill_id = ".$billID;
        DB::select($query);

        return redirect()->route('getAdminRefundSuccess')->with(['message' => 'Hủy đơn hàng thành công!']);
    }

    public function getAdminRefundSuccess(){
        return view('admin\Bill\admin-refund-success');
    }
}

