<?php

use Illuminate\Support\Facades\Route;

Route::get('lang/{lang}', function ($lang) {
    \Session::put('locale', $lang);
    return back();
});
Route::group(['middleware' => 'Lang'], function () {
    Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
