<?php

namespace Backend;

use Category,
    View,
    Redirect,
    Input,
    Acme\Validation\CategoryValidator as Validator,
    Acme\Recursive\Recursive as Recursive;

class CategoriesController extends \BackendController {

    public function index() {
        $categoires = Category::select('id', 'name', 'slug', 'status')->get();
        return View::make('backend.categories.index', ['categories' => $categoires]);
    }

    public function create() {
        $categories = Category::where('status', '=', 1)->get();
        $recurisve = new Recursive;
        $parent = $recurisve->dropdown($categories);
        array_unshift($parent, "Gốc");
        return View::make('backend.categories.create', ['parent' => $parent]);
    }

    public function store() {
        $validator = Validator::make()->addContext('create');
        if ($validator->passes()) {
            $category = new Category;
            if ($category::create(Input::All())) {
                return Redirect::route('nevergiveup.categories.index')
                                ->withSuccess('Bạn đã thêm chuyên mục thành công');
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

    public function show() {
        return View::make('categories.show');
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        $categories = Category::where('status', '=', 1)->get();
        $recurisve = new Recursive;
        $parent = $recurisve->dropdown($categories);
        array_unshift($parent, "Gốc");
        return View::make('backend.categories.edit', compact('category', 'parent'));
    }

    public function update($id) {
        $category = Category::findOrFail($id);
        $validator = Validator::make()->addContext('update')
                ->bindReplacement('slug', ['id' => $id]);
        if ($validator->passes()) {
            $category->name = Input::get('name');
            $category->slug = Input::get('slug');
            $category->parent_id = Input::get('parent_id');
            $category->status = Input::get('status');
            if ($category->save()) {
                return Redirect::route('nevergiveup.categories.index')
                                ->withSuccess('Bạn đã cập nhật chuyên mục thành công');
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

    public function destroy($id) {
        if (Category::findOrFail($id)->delete()) {
            return Redirect::route('nevergiveup.categories.index')
                            ->withSuccess('Bạn đã xóa thành công chuyên mục!');
        } else {
            return Redirect::back()
                            ->withError('Có lỗi xảy ra. Bạn vui lòng thử lại sau');
        }
    }

}
