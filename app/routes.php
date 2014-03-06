<?php

/* Backend Router */
Route::group(['prefix' => 'nevergiveup'], function() {
    /** User * */
    Route::get('/users/login', 'Backend\UsersController@getLogin');
    Route::post('/users/login', ['as' => 'nevergiveup.users.login',
        'uses' => 'Backend\UsersController@postLogin']);
    Route::get('/users/logout', 'Backend\UsersController@getLogout');

    /* Changepassword POST */
    Route::post('/users/change-password', array('as' => 'change-password-post',
        'uses' => 'Backend\UsersController@postChangePassword')
    );
    /** Changepassword GET */
    Route::get('/users/change-password', array('as' => 'change-password',
        'uses' => 'Backend\UsersController@getChangePassword'
            )
    );

    Route::get('/roles/draft', array('as' => 'draft',
        'uses' => 'Backend\RolesController@getDraft'
            )
    );

    Route::get('/categories/ajax', array('as' => 'ajax',
        'uses' => 'Backend\CategoriesController@getAjax'
            )
    );
    Route::get('/categories/sort', array('as' => 'sort',
        'uses' => 'Backend\CategoriesController@getSort'
            )
    );

    Route::resource('users', 'Backend\UsersController');

    /** Blog * */
    Route::resource('blogs', 'BlogsController');

    /** Category * */
    Route::resource('categories', 'Backend\CategoriesController');

    /** Roles * */
    Route::resource('roles', 'Backend\RolesController');

    /** Posts * */
    Route::resource('posts', 'Backend\PostsController');
    
    /** Langs * */
    Route::resource('langs', 'Backend\LangsController');
    
    /** Dashboard * */
    Route::any('/', 'Backend\DashboardController@index');
});





