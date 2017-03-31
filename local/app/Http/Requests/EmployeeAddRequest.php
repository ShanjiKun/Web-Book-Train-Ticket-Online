<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeAddRequest extends FormRequest
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
            'txtId' => 'required|primary:employee,employee_id',
            'txtId' => 'required',
            'txtName' => 'required',
            'txtUser' => 'required|unique:employee,username',
            'txtUser' => 'required',
            'txtPass' => 'required',
            'txtRepass' => 'required|same:txtPass'
        ];
    }
    public function messages(){
        return [
            'txtId.required' => 'Vui lòng nhập Mã nhân viên',
            'txtId.primary' => 'Mã nhân viên đã tồn tại',
            'txtName.required' => 'Vui lòng nhập họ & tên',
            'txtUser.required' => 'Vui lòng nhập Username',
            'txtUser.unique' => 'Username này đã tồn tại',
            'txtPass.required' => 'Vui lòng nhập Password',
            'txtRepass.required' => 'Vui lòng nhập lại Password',
            'txtRepass.same' => 'Mật khẩu không trùng'
        ];
    }
}
