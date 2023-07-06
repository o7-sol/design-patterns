<?php

declare(strict_types=1);

namespace Design\Pattern\AbstractFactory;

use Design\Pattern\AbstractFactory\Vehicle;

interface VehicleGroupFactory
{
    public function createCar(): Vehicle;
    
    public function createTruck(): Vehicle;

    public function createMotorcycle(): Vehicle;
}