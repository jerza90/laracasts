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
// API route
Auth::routes();

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{selectedtask}','TasksController@show')->name('tasklink');

Route::get('/jsonreturn','TasksController@gettest');

Route::post('/login','TasksController@loginApi');

Route::post('/user/register','TasksController@register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts/create', 'Posts@create')->name('post');

// Route::post('/posts/{post}/comments','CommentController@addComment');

Route::post('/posts/{post}/comments',function(){
	dd("hayyy");
});

Route::get('/posts', 'Posts@indexpost');
