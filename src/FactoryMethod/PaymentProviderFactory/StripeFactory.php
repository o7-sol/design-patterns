<?php

declare(strict_types=1);

namespace Design\Pattern\FactoryMethod\PaymentProviderFactory;

use Design\Pattern\FactoryMethod\PaymentProviderFactory\PaymentFactory;
use Design\Pattern\FactoryMethod\PaymentProvider\PaymentProvider;
use Design\Pattern\FactoryMethod\PaymentProvider\Stripe;

class StripeFactory implements PaymentFactory
{
    public function create(): PaymentProvider
    {
        return new Stripe(
            'TEST-API-KEY-FROM-ENV',
            'TEST-API-USERNAME-FROM-ENV',
            true,
        );
    }
}