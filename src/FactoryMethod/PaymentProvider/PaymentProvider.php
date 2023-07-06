<?php

declare(strict_types=1);

namespace Design\Pattern\FactoryMethod\PaymentProvider;

interface PaymentProvider
{
    public function pay(): void;
}