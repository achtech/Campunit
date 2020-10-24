<?php

use App\Http\Controllers\CamperController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{lang}', function ($lang) {
    \Session::put('locale', $lang);
    return back();
});
Route::group(['middleware' => 'Lang'], function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
    Route::get('/profile', 'App\Http\Controllers\UserController@index')->name('clients.user.profile');

    Route::get('/camper', [CamperController::class, 'index'])->name('camper');
    Route::get('/rent_out', [CamperController::class, 'rent_out'])->name('rent_out');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/terms', [ContactController::class, 'terms'])->name('terms');
    Route::get('/disclaimer', [ContactController::class, 'disclaimer'])->name('disclaimer');
    Route::get('/imprint', [ContactController::class, 'imprint'])->name('imprint');
    Route::get('/help', [ContactController::class, 'help'])->name('help');
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
