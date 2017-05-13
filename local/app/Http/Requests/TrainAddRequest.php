<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainAddRequest extends FormRequest
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
            'txtTrainName' => 'required|unique:train,name',
            'txtTrainName' => 'required|alpha_num|min:3',
            'txtFare' => 'required|integer'
        ];
    }
    public function messages(){
        return[
            'txtTrainName.required' => 'Vui lòng nhập tên tàu',
            'txtTrainName.unique' => 'Tên Tàu đã tồn tại',
            'txtTrainName.alpha_num' => 'Nhập kí tự là chữ hoặc số. Vui lòng nhập lại Tên Tàu',
            'txtTrainName.min' => 'Nhập ít nhất 3 kí tự . Vui lòng nhập lại Tên Tàu',
            'txtFare.required' => 'Vui lòng nhập Giá tàu',
            'txtFare.integer' => 'Nhập kí tự là số. Vui lòng nhập lại Giá tàu'
            
        ];
    }
}
