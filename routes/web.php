<?php

use App\Http\Controllers\CamperController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{lang}', function ($lang) {
    \Session::put('locale', $lang);
    return back();
});
Route::group(['middleware' => 'Lang'], function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index2');
    Route::get('/profile', 'App\Http\Controllers\UserController@index')->name('clients.user.profile');

    Route::get('/camper', [CamperController::class, 'index'])->name('camper');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/terms', [ContactController::class, 'terms'])->name('terms');
    Route::get('/disclaimer', [ContactController::class, 'disclaimer'])->name('disclaimer');
    Route::get('/imprint', [ContactController::class, 'imprint'])->name('imprint');
    Route::get('/help', [ContactController::class, 'help'])->name('help');
});
