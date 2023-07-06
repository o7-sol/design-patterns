<?php

declare(strict_types=1);

namespace Design\Pattern\Facade;

class RainDataApi
{
    public function fetchRainFromAPI(): string
    {
        return 'Fetching rain data...';
    }
}