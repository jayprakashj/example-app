<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CsrfVerificationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Pipeline\Pipeline;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pay', [PaymentController::class, 'pay']);

Route::get('/csrf-verification-bypass', [CsrfVerificationController::class, 'index'])->name('csrf-verification-bypass');

Route::withoutMiddleware([VerifyCsrfToken::class])->group(function () {
    Route::post('/csrf-verification-bypass', [CsrfVerificationController::class, 'store'])->name('csrf-verification-bypass.store');
});

Route::get('pipeline-demo', function () {
    $text = "   Laravel pipeline is Powerful!   ";
    $processed = app(Pipeline::class)
        ->send($text) // input
        ->through([
            \App\Pipes\TrimString::class,
            \App\Pipes\ConvertToLower::class,
            \App\Pipes\AppendSignature::class,
        ])
        ->thenReturn();

    return $processed;
});