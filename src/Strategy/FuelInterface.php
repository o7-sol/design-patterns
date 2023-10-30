<?php

declare(strict_types=1);

namespace Design\Pattern\Strategy;

interface FuelInterface
{
    public function calculate(int $miles): int;
}