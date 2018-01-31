<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

Route::get('/items/{id}', 'AdminItemsController@show')->name('home.item');


Route::group(['middleware'=> 'admin'], function(){

    Route::get('/admin', function(){
        return view('admin.index');
    });

    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/items', 'AdminItemsController');
    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::resource('admin/items/media', 'AdminItemsMediaController');

    // Comments
    Route::resource('admin/comments', 'ItemCommentController');
    Route::resource('admin/comments/replies', 'ItemCommentRepliesController');
    Route::get('admin/replies/all', 'ItemCommentRepliesController@index')->name('replies.all');

});


Route::group(['middleware'=>'auth'], function(){

   Route::post('comment/reply', 'ItemCommentRepliesController@commentReply');

});

