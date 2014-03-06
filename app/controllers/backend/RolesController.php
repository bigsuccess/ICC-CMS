<?php

namespace Backend;

use View,
    Input,
    Role,
    Redirect,
    Acme\Validation\RoleValidator as Validator;

class RolesController extends \BackendController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $roles = Role::where('status', '=', 1)->get();
        return View::make('backend.roles.index')->with(compact('roles'), $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('backend.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $validator = Validator::make();
        if ($validator->passes()) {
            $roles = new Role();
            if ($roles::create(Input::All())) {
                return Redirect::route('nevergiveup.roles.index')
                                ->withSuccess('Bạn đã thêm nhóm thành công');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $role = Role::findOrFail($id);
        return View::make('backend.roles.edit')->with(compact('role'), $role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $role = Role::findOrFail($id);
        $validator = Validator::make()
                ->bindReplacement('name', ['id' => $id]);
        if ($validator->passes()) {
            $role->name = Input::get('name');
            $role->status = Input::get('status');
            if ($role->save()) {
                return Redirect::route('nevergiveup.roles.index')
                                ->withSuccess('Bạn đã cập nhập nhóm thành công');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        if (Role::findOrFail($id)->delete()) {
            return Redirect::route('nevergiveup.roles.index')
                            ->withSuccess('Bạn đã xóa nhóm thành công');
        } else {
            return Redirect::back()
                            ->withError('Có lỗi xảy ra. Không thể xóa bỏ nhóm này');
        }
    }

    /*
     * Display the role Draft 
     */

    public function getDraft() {
        $roles = Role::where('status', '=', 0)->get();
        return View::make('backend.roles.draft')->with(compact('roles'), $roles);
    }

}
