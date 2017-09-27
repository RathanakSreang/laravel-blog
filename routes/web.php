<?php
Route::get('/', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');
Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');
