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
            'txtUser' => 'required',
            'txtPass' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'txtUser.required' => 'Vui lòng nhập Username',
            'txtPass.required'  => 'Vui lòng nhập Password',
        ];
    }
    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'title' => 'required|unique:posts|max:255',
    //         'body' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect('post/create')
    //                     ->withErrors($validator)
    //                     ->withInput();
    //     }

    //     // Store the blog post...
    // }
}
