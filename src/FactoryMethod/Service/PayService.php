<?php

declare(strict_types=1);

namespace Design\Pattern\FactoryMethod\Service;

use Design\Pattern\FactoryMethod\PaymentProviderFactory\PayPalFactory;
use Design\Pattern\FactoryMethod\PaymentProviderFactory\StripeFactory;

class PayService 
{
    public function pay(string $paymentProvider): void
    {
        $paymentFactory = match($paymentProvider) {
            'PayPal' => (new PayPalFactory())->create(),
            'Stripe' => (new StripeFactory())->create(),
            default => null,
        };

        if (!$paymentFactory) {
            throw new \Exception('Payment method not found');
        }

        $paymentFactory->pay();
    }
}