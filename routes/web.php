<?php


use App\HTTP\Controllers\UniversityController;
use App\HTTP\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');

Route::controller(UniversityController::class)
    ->prefix('universities')
    ->name('universities.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
    });