<?php

declare(strict_types=1);

namespace Design\Pattern\Facade;

class WindDataApi
{
    public function fetchWindFromAPI(): string
    {
        return 'Fetching wind data...';
    }
}