<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StationAddRequest extends FormRequest
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
            'txtStationName' => 'required',
            'txtCity' => 'required',
            'txtAddress' => 'required',
            'txtDistance' => 'required'
        ];
    }
    public function messages(){
        return[
            'txtStationName.required' => 'Vui lòng nhập Tên Ga',
            'txtStationName.unique'=>'Tên Ga đã tồn tại.'
            'txtCity.required' => 'Vui lòng nhập Tên Thành Phố',
            'txtAddress.required' => 'Vui lòng nhập Địa Chỉ',
            'txtDistance.required' => 'Vui lòng nhập Khoảng Cách'
        ];
    }
}
