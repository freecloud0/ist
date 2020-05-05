<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reportar', 'HomeController@report')->name('reportar');

Route::group(['middleware' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/usuarios', 'UserController@index')->name('usuarios');
    Route::get('/proyectos', 'ProjectController@index')->name('proyectos');
    Route::get('/config', 'ConfigController@index')->name('config');
});

