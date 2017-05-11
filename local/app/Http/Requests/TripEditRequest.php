<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripEditRequest extends FormRequest
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
            'sltTrain' => 'required',
            'sltStationLeave' => 'required',
            'sltStationArrive' => 'required',
            'txtDateLeave' => 'required',
            'txtTimeLeave' => 'required',
        ];
    }
    public function messages(){
        return[
            'sltTrain.required' => 'Vui lòng nhập Tàu Tàu',
            'sltStationLeave.required' => 'Vui lòng nhập Tên Ga Đi',
            'sltStationArrive.required' => 'Vui lòng nhập Tên Ga Đến',
            'txtDateLeave.required' => 'Vui lòng nhập Ngày Đi',
            'txtTimeLeave.required' => 'Vui lòng nhập Giờ Đi',
            
        ];
    }
}
