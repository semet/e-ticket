<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home.page');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
