<?php
Route::get('/', 'PostsController@index');
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
