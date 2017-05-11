<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarEditRequest extends FormRequest
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
            'txtCarName' => 'required',
            'txtNumSeat' => 'required',
            'sltTrain' => 'required',
            'sltCar' => 'required',
            'txtOr' => 'required',
        ];
    }
    public function messages(){
        return [
            'txtCarName.required' => 'Vui lòng nhập tên Toa Tàu',
            'txtCarName.unique' => 'Tên Toa này đã tồn tại',
            'txtNumSeat.required' => 'Vui lòng nhập số lượng chỗ ngồi',
            'sltTrain.required' => 'Vui lòng nhập Tên Tàu',
            'sltCar.required' => 'Vui lòng nhập loại chỗ ngồi',
            'txtOr.required' => 'Vui lòng nhập số toa',
        ];
    }
}
