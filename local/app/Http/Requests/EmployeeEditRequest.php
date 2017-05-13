<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeEditRequest extends FormRequest
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
            'txtName' => 'required|alpha|min:3|max:30',
            'txtUser' => 'required|unique:users,username',
            'txtUser' => 'required|alpha_num|min:6|max:12',
            'email' => 'required|email',
            'email' => 'required|unique:users,email',
            'txtPass' => 'required|alpha_num|min:6|max:12',
            'txtRepass' => 'required|same:txtPass'
        ];
    }
    public function messages(){
        return [
            'txtName.required' => 'Vui lòng nhập họ & tên',
            'txtName.min' => 'Phải nhập ít nhất 3 kí tự. Vui lòng nhập lại Họ và tên',
            'txtName.max' => 'Phải nhập tối đa 30 kí tự. Vui lòng nhập lại Họ và tên',
            'txtName.alpha' => 'Chỉ được nhập ký tự là chữ. Vui lòng nhập lại Họ và tên',
            'txtUser.required' => 'Vui lòng nhập tên đăng nhập',
            'txtUser.unique' => 'Tên đăng nhập này đã tồn tại',
            'txtUser.min' => 'Tên đăng nhập phải có ít nhất 6 kí tự. Vui lòng nhập lại',
            'txtUser.max' => 'Tên đăng nhập phải có tối đa 12 kí tự. Vui lòng nhập lại',
            'txtUser.alpha_num' => 'Chỉ nhập kí tự chữ và số. Vui lòng nhập lại',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email này đã tồn tại',
            'txtPass.required' => 'Vui lòng nhập mật khẩu',
            'txtPass.max' => 'Mật khẩu chỉ có tối đa 12 kí tự.Vui lòng nhập lại mật khẩu',
            'txtPass.min' => 'Mật khẩu  phải có ít nhất 6 kí tự. Vui lòng nhập lại mật khẩu',
            'txtPass.alpha_num' => 'Chỉ nhập kí tự chữ và số. Vui lòng nhập lại',
            'txtRepass.required' => 'Vui lòng nhập lại mật khẩu',
            'txtRepass.same' => 'Mật khẩu không trùng',
        ];
    }
}
