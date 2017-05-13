<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainEditRequest extends FormRequest
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
            'txtTrainName' => 'required',
            'txtFare' => 'required'
        ];
    }
    public function messages(){
        return[
            'txtTrainName.required' => 'Vui lòng nhập tên tàu',
            'txtTrainName.unique' => 'Tên Tàu đã tồn tại',
            'txtFare.required' => 'Vui lòng nhập Giá tàu'
            
        ];
    }
}
