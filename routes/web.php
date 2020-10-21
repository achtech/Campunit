<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListYourCamperController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{lang}', function ($lang) {
    \Session::put('locale', $lang);
    return back();
});
Route::group(['middleware' => 'Lang'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/listyourcamper', [ListYourCamperController::class, 'index'])->name('listyourcamper');
});
