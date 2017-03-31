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
            'txtTrainId' => 'required|primary:train,train_id',
            'txtTrainId' => 'required',
            'txtTrainName' => 'required'
        ];
    }
    public function messages(){
        return[
            'txtTrainId.required' => 'Vui lòng nhập Mã Tàu',
            'txtTrainId.primary' => 'Mã Tàu đã tồn tại',
            'txtTrainName.required' => 'Vui lòng nhập tên tàu'
            
        ];
    }
}
