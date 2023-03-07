<?php

declare(strict_types=1);

namespace Service;

use VehicleFactoryInterface;

class VehicleService
{
    private const BMW = 'bmw';
    private const HONDA = 'honda';

    private const CAR = 'car';
    private const TRUCK = 'truck';

    public function __construct(private readonly VehicleFactoryInterface $vehicleFactory)
    {
    }

    public function provideVehicle(string $brand, string $type): void
    {
        match (true) {
            $type === self::CAR => $this->createVehicleByBrand($brand)->createCar(),
            $type === self::TRUCK => $this->createVehicleByBrand($brand)->createTruck(),
        };
    }

    public function createVehicleByBrand(string $brand): VehicleFactoryInterface
    {
        match ($brand) {
            self::BMW => new \Bmw\BmwFactory(),
            self::HONDA => new \Honda\HondaFactory(),
        };
    }
}