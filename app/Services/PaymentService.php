<?php

namespace App\Services;

class PaymentService
{
    public function charge($amount)
    {
        return "Charged {$amount} successfully!";
    }

    public function refund($amount)
    {
        return "Refunded {$amount} successfully!";
    }
}
