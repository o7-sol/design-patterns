<?php

declare(strict_types=1);

namespace Design\Pattern\AbstractFactory\Service;

use Design\Pattern\AbstractFactory\Vehicle\Honda\VehicleFactory as HondaFactory;
use Design\Pattern\AbstractFactory\Vehicle\BMW\VehicleFactory as BmwFactory;

class VehicleCatalogService
{
    public function generateVehiclesByBrand(string $brand): void
    {
        $vehicles = match($brand) {
            'Honda' => [
                (new HondaFactory())->createCar(),
                (new HondaFactory())->createTruck(),
                (new HondaFactory())->createMotorcycle(),
            ],
            'BMW' => [
                (new BmwFactory())->createCar(),
                (new BmwFactory())->createTruck(),
                (new BmwFactory())->createMotorcycle(),
            ],
            default => null,
        };

        if (!$vehicles) {
            throw new \Exception('Brand not found');
        }

        foreach ($vehicles as $vehicle) {
            $vehicle->testDrive();
        }
    }
}