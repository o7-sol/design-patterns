<?php

declare(strict_types=1);

namespace Design\Pattern\Facade;

class TemperatureDataApi
{
    public function fetchTemperatureFromAPI(): string
    {
        return 'Fetching temperature data...';
    }
}