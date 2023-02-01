<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FacebookAuthController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home.page');


//auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.show');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.post');
Route::get('/resend-verification', [RegistrationController::class, 'resendVerification'])->name('register.resend.verification');
Route::get('/verify-email/{id}', [RegistrationController::class, 'showVerificationForm'])->name('register.verify.show');
Route::post('/verify-email', [RegistrationController::class, 'verify'])->name('register.verify');
//google auth
Route::get('/login/google', [GoogleAuthController::class, 'redirect'])
    ->name('login.google.redirect');
Route::get('/login/google/callback', [GoogleAuthController::class, 'callback'])
    ->name('login.google.callback');
//facebook auth
Route::get('/login/facebook', [FacebookAuthController::class, 'redirect'])
    ->name('login.facebook.redirect');
Route::get('/login/facebook/callback', [FacebookAuthController::class, 'callback'])
    ->name('login.facebook.callback');
//new password for social user
Route::get('/new-password/{userId}', [NewPasswordController::class, 'show'])->name('new.password.show');
Route::post('/new-password', [NewPasswordController::class, 'store'])->name('new.password.store');

//
Route::get('/destination/{id}', [DestinationController::class, 'index'])
    ->name('destination');

Route::post('/booking/check-availability', [BookingController::class, 'checkAvailability'])
    ->name('booking.check-availability');

Route::middleware(['auth', 'email.verified'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'profile')->name('user.profile');
        Route::get('/user/settings', 'setting')->name('user.setting');
        Route::get('/user/order', 'order')->name('user.order');
        Route::get('/user/order/{id}', 'orderDetails')->name('user.order.details');
        Route::get('/user/message', 'message')->name('user.message');
    });

    Route::post('/booking', [BookingController::class, 'index'])
        ->name('booking');

    Route::post('/booking/confirm', [BookingController::class, 'confirm'])
        ->name('booking.confirm');

    Route::get('/checkout/{bookingId}', [CheckoutController::class, 'index'])
        ->name('checkout');

    Route::get('/checkout/success/{bookingId}', [CheckoutController::class, 'processSuccessCheckout'])
        ->name('checkout.success');

    Route::get('/checkout/pending/{bookingId}', [CheckoutController::class, 'processPendingOrder'])
        ->name('checkout.pending');

    Route::get('/invoice/{bookingId}', [InvoiceController::class, 'index'])
        ->name('invoice');
});
Route::get('/invoice/download/{bookingId}', [InvoiceController::class, 'download'])
    ->name('invoice.download');
