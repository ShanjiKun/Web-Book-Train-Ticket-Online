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
            'txtCarName' => 'required',
            'txtNumSeat' => 'required',
            'sltCar' => 'required',
        ];
    }
    public function messages(){
        return [
            'txtCarName.required' => 'Vui lòng nhập tên Toa Tàu',
            'txtNumSeat.required' => 'Vui lòng nhập số lượng chỗ ngồi',
            'sltCar.required' => 'Vui lòng nhập loại chỗ ngồi',
            
        ];
    }
}
