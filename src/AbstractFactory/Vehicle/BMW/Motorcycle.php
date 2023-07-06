<?php

declare(strict_types=1);

namespace Design\Pattern\AbstractFactory\Vehicle\BMW;

use Design\Pattern\AbstractFactory\Vehicle;

class Motorcycle implements Vehicle
{
    public function __construct(private readonly string $brand)
    {}

    public function testDrive(): void
    {
        echo 'Test driving ' . $this->brand . ' motorcycle';
    }
}