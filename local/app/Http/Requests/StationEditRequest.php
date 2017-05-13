<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StationEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtStationName' => 'required|unique:station,name',
            'txtStationName' => 'required|alpha',
            'txtCity' => 'required|alpha',
            'txtAddress' => 'required|alpha_num',
            'txtDistance' => 'required|integer'
        ];
    }
    public function messages(){
        return[
            'txtStationName.required' => 'Vui lòng nhập Tên Ga',
            'txtStationName.unique'=>'Tên Ga đã tồn tại.'
            'txtStationName.alpha'=>'Nhập kí tự là chữ. Vui lòng nhập lại'
            'txtCity.required' => 'Vui lòng nhập Tên Thành Phố',
            'txtCity.alpha'=>'Nhập kí tự là chữ. Vui lòng nhập lại'
            'txtAddress.required' => 'Vui lòng nhập Địa Chỉ',
            'txtAddress.alpha_num' => 'Nhập kí tự là chữ hoặc số. Vui lòng nhập lại Địa Chỉ',
            'txtDistance.required' => 'Vui lòng nhập Khoảng Cách'
            'txtDistance.integer' => 'Nhập kí tự là số. Vui lòng nhập lại Khoảng Cách'
        ];
    }
}
