<?php

namespace App\Providers;

use App\Contracts\PaymentGateway;
use App\Services\PaypalPayment;
use App\Services\StripePayment;
use Illuminate\Support\ServiceProvider;

class PaymentProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentGateway::class, function ($app, $parameters) {
            $method = $app['request']->input('method') ?? $parameters['method'] ?? $app['config']->get('app.payment.method');
            return match ($method) {
                'paypal' => new PaypalPayment(),
                'stripe' => new StripePayment(),
                default => throw new \Exception('Invalid payment method'),
            };
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
