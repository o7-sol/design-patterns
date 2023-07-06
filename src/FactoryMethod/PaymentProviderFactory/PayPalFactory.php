<?php

declare(strict_types=1);

namespace Design\Pattern\FactoryMethod\PaymentProviderFactory;


use Design\Pattern\FactoryMethod\PaymentProvider\PayPal;
use Design\Pattern\FactoryMethod\PaymentProviderFactory\PaymentFactory;
use Design\Pattern\FactoryMethod\PaymentProvider\PaymentProvider;

class PayPalFactory implements PaymentFactory
{
    public function create(): PaymentProvider
    {
        return new PayPal(
            'TEST-API-KEY-FROM-ENV',
            'TEST-API-USERNAME-FROM-ENV',
            'TEST-API-SECRET-FROM-ENV',
        );
    }
}