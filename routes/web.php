<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('lang/{lang}', function ($lang) {
    \Session::put('locale', $lang);
    return back();
});
Route::group(['middleware' => 'Lang'], function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
    Route::get('/profile', 'App\Http\Controllers\UserController@index')->name('clients.user.profile');
    
});
