<?php

declare(strict_types=1);

namespace Design\Pattern\FactoryMethod\PaymentProvider;

use Design\Pattern\FactoryMethod\PaymentProvider\PaymentProvider;

class PayPal implements PaymentProvider
{
    public function __construct(
        private readonly string $apiKey,
        private readonly string $apiUsername,
        private readonly string $apiSecret,
    )
    {}

    public function pay(): void
    {
        echo 'I\'ve paid with ' . get_class($this);
    }
}