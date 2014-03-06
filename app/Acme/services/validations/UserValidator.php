<?php

namespace Acme\Validation;

use Andy\Validation\ValidatorService;

class UserValidator extends ValidatorService {

    protected $rules = [
        'default' => [
            'birthday' => 'required|date',
            'phone' => 'required',
            'first_name' => 'required|min:3|max:35',
            'last_name' => 'required|min:3|max:10',
            'address' => 'required'
        ],
        'create' => [
            'username' => 'required|min:6|max:32|unique:users|regex:/^([a-z])+$/i',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'email' => 'required|email|unique:users',
        ],
        'update' => [
            'email' => 'required|unique:users,email,@id'
        ],
        'changepass'=>[
            'old_password'=>'required|min:6',
            'new_password'=>'required|min:6|confirmed',
            'new_password_confirmation'=>'required|min:6',
        ],
        'login' => [
            'username' => 'required|min:6|max:32|regex:/^([a-z])+$/i',
            'password' => 'required|min:6'
        ]
    ];
    protected $label = [
        'username' => 'Tên tài khoản',
        'password' => 'Mật khẩu',
        'password_confirmation' => 'Nhập lại mật khẩu',
        'birthday' => 'Ngày sinh',
        'phone' => 'Số điện thoại',
        'first_name' => 'Họ đệm',
        'last_name' => 'Tên đệm',
        'address' => 'Địa chỉ',
        'old_password' =>'Mật khẩu cũ',
        'new_password' =>'Mật khẩu mới',
        'new_password_confirmation'=>'Nhập lại mật khẩu mới'
    ];
    protected $messages = [
        'username.regex' => 'Tên tài khoản không chưa kí tự đặc biệt'
    ];

}
