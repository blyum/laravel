<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/Allstatistics', 'StatisticController@allStat')->name('allStat');

Route::get('/home/MyStatistics', 'StatisticController@myStat')->name('myStat');


