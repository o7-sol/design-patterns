<?php

declare(strict_types=1);

namespace Design\Pattern\FactoryMethod\PaymentProviderFactory;

use Design\Pattern\FactoryMethod\PaymentProvider\PaymentProvider;

interface PaymentFactory
{
    public function create(): PaymentProvider;
}