<?php

use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\AboutController;
use App\HTTP\Controllers\UniversityController;
use App\HTTP\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->name('home');

Route::resource('/about', Aboutcontroller::class);
Route::resource('/universities', UniversityController::class);
Route::resource('/contact', ContactController::class);
