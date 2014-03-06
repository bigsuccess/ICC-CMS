<?php

namespace Backend;

use View,
    Input,
    Redirect,
    Post,
    Category,
    Acme\Validation\PostValidator,
    Acme\Recursive\Recursive as Recursive;

class PostsController extends \BackendController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $posts = Post::all();
        return View::make('backend.posts.index')->with(compact('posts'), $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $categories = Category::where('status', '=', 1)->get();
        $recursive = new Recursive();
        $cate_id = $recursive->dropdown($categories);
        return View::make('backend.posts.create')->with(compact('cate_id'), $cate_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
