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
			default:
				$message = 'Server error';
				break;
		}
		$ret = '{"code": "'.$code.'", "message": "'.$message.'", "data": '.$jsonData.'}';
		return $ret;
	}
}