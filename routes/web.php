<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{lang}', function ($lang) {
    \Session::put('locale', $lang);
    return back();
});
Route::group(['middleware' => 'Lang'], function () {
    Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
Route::post('login', 'App\Http\Controllers\ClientController@doLogin');
Route::get('auth/facebook', [ClientController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', 'App\Http\Controllers\ClientController@handleFacebookCallback');
Route::post('/signUp', [ClientController::class, 'sign_up']);
//Route::get('/signUp', [ClientController::class, 'sign_up'])->name('client.index');
Route::resource('client', 'App\Http\Controllers\ClientController', ['except' => 'destroy', 'names' => [
    'index' => 'client.index',
    'store' => 'client.store',
    'show' => 'client.show',
]]);
