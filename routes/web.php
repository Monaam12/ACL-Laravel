<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')
    ->middleware(['auth', 'can:list-role'])->group(function () {
        Route::get('/', 'DashController@index');
        Route::resource('/users', 'UserController', ['except' => ['create', 'store']]);
        Route::resource('/roles', 'RoleController');
    });
