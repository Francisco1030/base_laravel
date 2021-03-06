<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('posts/new', 'PostController@showForm')->name('posts.showForm');

Route::post('posts/store', 'PostController@createPost')->name('posts.createPost');

Route::get('get-user', 'UserController@getAll');

Route::group(['namespace' => 'Form'], function () {
   
Route::get('users', 'TestController@getAllUsers')->name('users.getAll');

Route::get('users/new', 'TestController@formCreateUser')->name('users.createUser');

Route::get('users/edit/{user}', 'TestController@formEditUser')->name('users.formEditUser');

Route::get('users/{user}', 'TestController@getUser')->name('users.getUser');

Route::post('users/store', 'TestController@storeUser')->name('users.storeUser');

Route::put('users/edit/{user}', 'TestController@editUser')->name('users.editUser');

Route::delete('users/destroy/{user}', 'TestController@deleteUser')->name('users.deleteUser'); 
});
