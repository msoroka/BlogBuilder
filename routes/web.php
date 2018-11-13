<?php

Route::group(['middleware' => ['auth', 'can:dashboard'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::name('list-users')->get('/', 'UserController@getAllUsers')->middleware('can:list-users');
        Route::name('create-user')->get('create', 'UserController@getCreateUser')->middleware('can:create-users');
        Route::name('store-user')->post('store', 'UserController@storeUser')->middleware('can:create-users');
        Route::name('edit-user')->get('{id}/edit', 'UserController@getEditUser')->middleware('can:edit-users');
        Route::name('update-user')->put('{id}/update', 'UserController@updateUser')->middleware('can:edit-users');
        Route::name('remove-user')->delete('{id}/remove', 'UserController@removeUser')->middleware('can:remove-users');
    });
    Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
        Route::name('list-posts')->get('/', 'PostController@getAllPosts')->middleware('can:list-posts');
        Route::name('create-post')->get('create', 'PostController@getCreatePost')->middleware('can:create-posts');
        Route::name('store-post')->post('store', 'PostController@storePost')->middleware('can:create-posts');
        Route::name('edit-post')->get('{id}/edit', 'PostController@getEditPost')->middleware('can:edit-posts');
        Route::name('update-post')->put('{id}/update', 'PostController@updatePost')->middleware('can:edit-posts');
        Route::name('remove-post')->delete('{id}/remove', 'PostController@removePost')->middleware('can:remove-posts');
    });
    Route::group(['prefix' => 'upload', 'as' => 'upload.'], function () {
        Route::name('upload')->get('/', function(){
            return view('admin.upload.index');
        })->middleware('can:list-posts');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
