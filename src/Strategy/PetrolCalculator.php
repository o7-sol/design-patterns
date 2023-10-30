<?php

declare(strict_types=1);

namespace Design\Pattern\Strategy;

use Design\Pattern\Strategy\FuelInterface;

class PetrolCalculator implements FuelInterface
{
    public function calculate(int $miles): int
    {
        return 100;
    }
}