<?php

declare(strict_types=1);

interface VehicleFactoryInterface
{
    public function createCar(): CarInterface;
    public function createTruck(): TruckInterface;
}