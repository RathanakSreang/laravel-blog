<?php
Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comment', 'CommentsController@store');
Route::post('/posts', 'PostsController@store');
Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
