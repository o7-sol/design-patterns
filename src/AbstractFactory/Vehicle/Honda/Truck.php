<?php

declare(strict_types=1);

namespace Design\Pattern\AbstractFactory\Vehicle\Honda;

use Design\Pattern\AbstractFactory\Vehicle;

class Truck implements Vehicle
{
    public function __construct(private readonly string $brand)
    {}

    public function testDrive(): void
    {
        echo 'Test driving ' . $this->brand . ' truck';
    }
}