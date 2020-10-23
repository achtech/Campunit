<?php

use App\Http\Controllers\ContactController;
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
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/terms', [ContactController::class, 'terms'])->name('terms');
    Route::get('/disclaimer', [ContactController::class, 'disclaimer'])->name('disclaimer');
    Route::get('/imprint', [ContactController::class, 'imprint'])->name('imprint');
});
