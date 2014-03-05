<?php
/* Backend Router */
Route::group(['prefix' => 'nevergiveup'], function() {
    /** User **/
    Route::get('/users/login', 'Backend\UsersController@getLogin');
    Route::post('/users/login', 
            ['as' => 'nevergiveup.users.login',
            'uses' => 'Backend\UsersController@postLogin']);
    Route::get('/users/logout', 'Backend\UsersController@getLogout');
    Route::get('/users/change-password',['as'=> 'change-password',
        'users'=>'Backend\UsersController@getChangePassword'
        ]);
    //Route::post('users/change-password',['as' => 'nevergiveup.users.changpassword', 'users'=> ])
    Route::resource('users', 'Backend\UsersController');
    
    /** Blog **/
    Route::resource('blogs', 'BlogsController');
    /** Category **/
    
    Route::resource('categories', 'Backend\CategoriesController');
    /** Dashboard **/
    
    Route::any('/', 'Backend\DashboardController@index');    
});





