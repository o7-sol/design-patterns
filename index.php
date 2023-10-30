<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Design\Pattern\FactoryMethod\Service\PayService;
use Design\Pattern\AbstractFactory\Service\VehicleCatalogService;
use Design\Pattern\Facade\WeatherApiFacade;
use Design\Pattern\Adapter\Service\AuthService;
use Design\Pattern\Adapter\AppleAuth;
use Design\Pattern\Strategy\DieselCar;
use Design\Pattern\Strategy\DieselCalculator;
use Design\Pattern\Strategy\PetrolCar;
use Design\Pattern\Strategy\PetrolCalculator;

// Factory Method:
// Pass payment type to create payment instance and pay with it
$payService = new PayService();
$payService->pay('PayPal');

echo "<br/><br/>";

// Abstract Factory:
// Pass vehicle brand to generate group of vehicles by provided brand
$vehicleGroupService = new VehicleCatalogService();
$vehicleGroupService->generateVehiclesByBrand('Honda');
echo "<br/><br/>";

// Facade:
// Use of facade by calling three different API with one method
// Possible to use factories for creating separate APIs and then use factories within Facade
$weatherApiFacade = new WeatherApiFacade();
$weatherApiFacade->fetchWeatherInformation();
echo "<br/><br/>";

// Adapter:
// Multiple third party login options
// Now it's possible to create another auth provider and make it follow TwoFactorAuth interface
$authService = new AuthService();
$authService->authenticate(new AppleAuth());
echo "<br/><br/>";

// Strategy:
$dieselCar = new DieselCar(new DieselCalculator());
$petrolCar = new PetrolCar(new PetrolCalculator());

echo 'Diesel cost: ' . $dieselCar->costMileage(425);
echo 'Petrol cost: ' . $petrolCar->costMileage(352);