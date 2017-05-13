<?php 
namespace App\Utils;
class Utils{
	public static function createResponse($code, $jsonData){
		$message;
		switch ($code) {
			case 0:
				$message = 'success';
				break;
			case 1:
				$message = 'Data empty';
				break;
			case 2:
				$message = 'Json wrong';
				break;
			case 3:
				$message = 'Ghế bạn chọn đã không khả dụng!';
				break;
			case 4:
				$message = 'Vui lòng đăng nhập để tiếp tục!';
				break;
			case 5:
				$message = 'Thiếu hình thức thanh toán!';
				break;
			case 6:
				$message = 'Tham số không chính xác!';
				break;
			case 7:
				$message = 'Đơn hàng hết hạn!';
				break;
			case 8:
				$message = 'Đơn hàng không hợp lệ!';
				break;
			case 9:
				$message = 'Đơn hàng Chưa thanh toán!';
				break;
			case 10:
				$message = 'Đơn hàng đã hủy trước đó!';
				break;
			case 11:
				$message = 'Thời gian trả vé cách thời gian tàu chạy 48 tiếng!';
				break;
			default:
				$message = 'Something went wrong!';
				break;
		}
		$ret = '{"code": "'.$code.'", "message": "'.$message.'", "data": '.$jsonData.'}';
		return $ret;
	}
	public static function createResponseMessage($code, $message, $jsonData){
		$ret = '{"code": "'.$code.'", "message": "'.$message.'", "data": '.$jsonData.'}';
		return $ret;
	}
}