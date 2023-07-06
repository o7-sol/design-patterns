<?php

declare(strict_types=1);

namespace Design\Pattern\Facade;

use Design\Pattern\Facade\RainDataApi;
use Design\Pattern\Facade\TemperatureDataApi;
use Design\Pattern\Facade\WindDataApi;

class WeatherApiFacade
{
    public function __construct(
        private readonly RainDataApi $rainDataApi = new RainDataApi(),
        private readonly TemperatureDataApi $temperatureDataApi = new TemperatureDataApi(),
        private readonly WindDataApi $windDataApi = new WindDataApi(),
    )
    {}

    public function fetchWeatherInformation(): void
    {
        $rainData = $this->rainDataApi->fetchRainFromAPI();
        $temperatureData = $this->temperatureDataApi->fetchTemperatureFromAPI();
        $windDataApi = $this->windDataApi->fetchWindFromAPI();

        echo 
            'Rain: ' . $rainData . 
            ' Temperature: ' . $temperatureData . 
            ' Wind: ' . $windDataApi;
    }
}