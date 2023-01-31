<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home.page');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/destination/{id}', [DestinationController::class, 'index'])
    ->name('destination');

Route::post('/booking/check-availability', [BookingController::class, 'checkAvailability'])
    ->name('booking.check-availability');

Route::middleware(['auth'])->group(function () {
    Route::post('/booking', [BookingController::class, 'index'])
        ->name('booking');
    Route::post('/booking/confirm', [BookingController::class, 'confirm'])
        ->name('booking.confirm');
    Route::get('/checkout/{bookingId}', [CheckoutController::class, 'index'])
        ->name('checkout');
    Route::get('/checkout/success/{bookingId}', [CheckoutController::class, 'processSuccessCheckout'])
        ->name('checkout.success');
    Route::get('/invoice/{bookingId}', [InvoiceController::class, 'index'])
        ->name('invoice');

});
Route::get('/invoice/download/{bookingId}', [InvoiceController::class, 'download'])
    ->name('invoice.download');

