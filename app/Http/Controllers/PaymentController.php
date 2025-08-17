<?php

namespace App\Http\Controllers;

use App\Contracts\PaymentGateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // public function pay(PaymentGateway $payment)
    // {
    //     return $payment->charge(100);
    // }

    // public function pay()
    // {
    //     $payment = app(PaymentGateway::class);
    //     return $payment->charge(100);
    // }

    public function pay()
    {
        $payment = app(PaymentGateway::class, ['method' => 'paypal']);
        return $payment->charge(100);
    }
}
