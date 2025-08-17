<?php

namespace App\Services;

use App\Contracts\PaymentGateway;

class StripePayment implements PaymentGateway
{
    public function charge(float $amount): void
    {
        // TODO: Implement charge() method.
        echo "Charging $amount via Stripe";
    }
}