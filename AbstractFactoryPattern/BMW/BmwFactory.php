<?php

declare(strict_types=1);

namespace Bmw;

class BmwFactory implements \VehicleFactoryInterface
{
    public function createCar(): BmwCar
    {
        return new BmwCar();
    }

    public function createTruck(): BmwTruck
    {
        return new BmwTruck();
    }
}