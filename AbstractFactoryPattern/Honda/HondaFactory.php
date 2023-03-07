<?php

declare(strict_types=1);

namespace Honda;

class HondaFactory implements \VehicleFactoryInterface
{
    public function createCar(): HondaCar
    {
        return new HondaCar();
    }

    public function createTruck(): HondaTruck
    {
        return new HondaTruck();
    }
}