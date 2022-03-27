<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Họ và tên là trường bắt buộc',
            'name.min' => 'Họ và tên phải ít nhất :min ký tự',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã được đăng ký',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải ít nhất :min ký tự',
            'repassword.same' => 'Mật khẩu nhập lại không khớp',
            'repassword.required' => 'Mật khẩu nhập là trường bắt buộc',
        ];
    }
}
