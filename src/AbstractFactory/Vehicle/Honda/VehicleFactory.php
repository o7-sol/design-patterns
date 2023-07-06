<?php

declare(strict_types=1);

namespace Design\Pattern\AbstractFactory\Vehicle\Honda;

use Design\Pattern\AbstractFactory\VehicleGroupFactory;
use Design\Pattern\AbstractFactory\Vehicle\Honda\Car;
use Design\Pattern\AbstractFactory\Vehicle\Honda\Truck;
use Design\Pattern\AbstractFactory\Vehicle\Honda\Motorcycle;
use Design\Pattern\AbstractFactory\Vehicle;

class VehicleFactory implements VehicleGroupFactory
{
    public function createCar(): Vehicle
    {
        return new Car('Honda');
    }
    
    public function createTruck(): Vehicle
    {
        return new Truck('Honda');
    }

    public function createMotorcycle(): Vehicle
    {
        return new Motorcycle('Honda');
    }
}