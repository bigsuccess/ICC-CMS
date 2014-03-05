<?php

namespace Backend;

use View,
    Input,
    Auth,
    Redirect,
    User,
    Hash,
    Carbon,
    Acme\Validation\UserValidator as Validator;

class UsersController extends \BackendController {

    public function __construct() {
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('auth', array('except' => array('getLogin', 'postLogin')));
    }

    public function index() {
        $users = User::all();
        return View::make('backend.users.index')->with('users', $users);
    }

    public function create() {
        return View::make('backend.users.create');
    }

    public function store() {
        $validator = Validator::make()->addContext('create')->statusMerge(true);
        if ($validator->passes()) {
            $user = new User;
            $user->username = Input::get('username');
            $user->password = Hash::make(Input::get('password'));
            $user->email = Input::get('email');
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->gender = Input::get('gender');
            $user->birthday = Input::get('birthday');
            $user->phone = Input::get('phone');
            $user->address = Input::get('address');
            $user->joined_date = Carbon::now();
            $user->status = 1;
            if ($user->save()) {
                return Redirect::to('nevergiveup/users')
                                ->withSuccess('Bạn đã tạo thành công tài khoản');
            } else {
                return Redirect::back()
                                ->withError('Có lỗi xảy ra. Bạn vui lòng thử lại sau');
            }
        } else {
            return Redirect::back()
                            ->withError('Bạn vui lòng kiểm tra các trường dữ liệu')
                            ->withInput()
                            ->withErrors($validator->errors());
        }
    }

    public function show($id) {
        return View::make('backend.users.show');
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return View::make('backend.users.edit', compact('user'));
    }

    public function update($id) {
        $user = User::findOrFail($id);
        $validator = Validator::make()->addContext('update')
                ->bindReplacement('email',['id' => $id]);
        if ($validator->passes()) {
            $user->email = Input::get('email');
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->gender = Input::get('gender');
            $user->birthday = Input::get('birthday');
            $user->phone = Input::get('phone');
            $user->address = Input::get('address');
            if ($user->save()) {
                return Redirect::to('nevergiveup/users')
                                ->withSuccess('Bạn đã cập nhập thành công tài khoản');
            } else {
                return Redirect::back()
                                ->withError('Có lỗi xảy ra. Bạn vui lòng thử lại sau');
            }
        } else {
            return Redirect::back()
                            ->withError('Bạn vui lòng kiểm tra các trường dữ liệu')
                            ->withInput()
                            ->withErrors($validator->errors());
        }
    }

    /*
     * Delete one recoder
     */

    public function destroy($id) {
        if (User::findOrFail($id)->delete()) {
            return Redirect::route('nevergiveup.users.index')
                            ->withSuccess('Bạn đã xóa tài khoản thành công!');
        } else {
            return Redirect::back(nevergiveup . users . index)
                            ->withError('Không thể xóa được!');
        }
    }

    public function getLogin() {
        return View::make('backend.users.login');
    }

    public function postLogin() {
        $v = Validator::make()->statusMerge(false)->addContext('login');
        if ($v->passes()) {
            $credentials = [
                'username' => Input::get('username'),
                'password' => Input::get('password'),
                'status' => 1
            ];
            if (Auth::attempt($credentials, Input::get('remember'))) {
                return Redirect::intended('nevergiveup');
            }
            return Redirect::back()->withError('Tên tài khoản hoặc mật khẩu không chính xác');
        } else {
            return Redirect::back()->withErrors($v->errors());
        }
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('/nevergiveup/users/login');
    }

    public function getChangePassword(){
        return View::make('backend.changepassword');
    }
}
