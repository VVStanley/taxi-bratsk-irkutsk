<?php

Route::get('/', 'IndexController@index')->name('index');
Route::post('/', 'IndexController@post')->name('post');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
