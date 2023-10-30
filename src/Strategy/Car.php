<?php

declare(strict_types=1);

namespace Design\Pattern\Strategy;

use Design\Pattern\Strategy\FuelInterface;

class Car
{
    public function __construct(private readonly FuelInterface $fuelInterface)
    {

    }

    public function costMileage(int $miles): int
    {
        return $this->fuelInterface->calculate($miles);
    }
}