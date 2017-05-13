<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarAddRequest extends FormRequest
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
            'txtCarName' => 'required|unique:car,name',
            'txtCarName' => 'required|alpha_num|min:2',
            'txtNumSeat' => 'required|integer',
            'sltTrain' => 'required',
            'sltCar' => 'required',
            'txtOr' => 'required|integer',
        ];
    }
    public function messages(){
        return [
            'txtCarName.required' => 'Vui lòng nhập tên Toa Tàu',
            'txtCarName.unique' => 'Tên Toa này đã tồn tại',
            'txtCarName.alpha_num' => 'Nhập kí tự là chữ hoặc số. Vui lòng nhập lại Tên Toa',
            'txtCarName.min' => 'Nhập tối thiểu 2 kí tự. Vui lòng nhập lại Tên Toa',
            'txtNumSeat.required' => 'Vui lòng nhập số lượng chỗ ngồi',
            'txtNumSeat.integer' => 'Nhập kí tự là số. Vui lòng nhập lại số lượng chỗ ngồi',
            'sltTrain.required' => 'Vui lòng nhập Tàu',
            'sltCar.required' => 'Vui lòng nhập loại chỗ ngồi',
            'txtOr.required' => 'Vui lòng nhập số toa',
            'txtOr.integer' => 'Nhập kí tự là số. Vui lòng nhập lại số toa',
        ];
    }
}
