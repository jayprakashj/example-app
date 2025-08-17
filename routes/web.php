<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CsrfVerificationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pay', [PaymentController::class, 'pay']);

Route::get('/csrf-verification-bypass', [CsrfVerificationController::class, 'index'])->name('csrf-verification-bypass');

Route::withoutMiddleware([VerifyCsrfToken::class])->group(function () {
    Route::post('/csrf-verification-bypass', [CsrfVerificationController::class, 'store'])->name('csrf-verification-bypass.store');
});