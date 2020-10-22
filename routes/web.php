<?php

use App\Http\Controllers\CamperController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('lang/{lang}', function ($lang) {
    \Session::put('locale', $lang);
    return back();
});
Route::group(['middleware' => 'Lang'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/camper', [CamperController::class, 'index'])->name('camper');
});
