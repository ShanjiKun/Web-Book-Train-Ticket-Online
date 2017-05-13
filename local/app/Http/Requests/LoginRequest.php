<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'txtUser' => 'required|alpha_num|min:6|max:12',
            'txtPass' => 'required|alpha_num|min:6|max:12',
        ];
    }
    public function messages()
    {
        return [
            'txtUser.required' => 'Vui lòng nhập tên đăng nhập',
            'txtUser.min' => 'Tên đăng nhập phải có ít nhất 6 kí tự. Vui lòng nhập lại',
            'txtUser.max' => 'Tên đăng nhập phải có tối đa 12 kí tự. Vui lòng nhập lại',
            'txtUser.alpha_num' => 'Chỉ nhập kí tự chữ và số. Vui lòng nhập lại',
            'txtPass.required' => 'Vui lòng nhập mật khẩu',
            'txtPass.max' => 'Mật khẩu chỉ có tối đa 12 kí tự.Vui lòng nhập lại mật khẩu',
            'txtPass.min' => 'Mật khẩu  phải có ít nhất 6 kí tự. Vui lòng nhập lại mật khẩu',
            'txtPass.alpha_num' => 'Chỉ nhập kí tự chữ và số. Vui lòng nhập lại',
        ];
    }
    
}
