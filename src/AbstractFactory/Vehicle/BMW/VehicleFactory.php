<?php

declare(strict_types=1);

namespace Design\Pattern\AbstractFactory\Vehicle\BMW;

use Design\Pattern\AbstractFactory\VehicleGroupFactory;
use Design\Pattern\AbstractFactory\Vehicle\BMW\Car;
use Design\Pattern\AbstractFactory\Vehicle\BMW\Truck;
use Design\Pattern\AbstractFactory\Vehicle\BMW\Motorcycle;
use Design\Pattern\AbstractFactory\Vehicle;

class VehicleFactory implements VehicleGroupFactory
{
    public function createCar(): Vehicle
    {
        return new Car('BMW');
    }
    
    public function createTruck(): Vehicle
    {
        return new Truck('BMW');
    }

    public function createMotorcycle(): Vehicle
    {
        return new Motorcycle('BMW');
    }
}