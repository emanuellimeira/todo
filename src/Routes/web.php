<?php

Route::get('todo/list', 'TodoController@index');
Route::resource('todo', 'TodoController');