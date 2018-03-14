<?php

Route::get('/', function () {

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
