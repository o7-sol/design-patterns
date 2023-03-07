<?php

declare(strict_types=1);

interface TruckInterface
{
    public function fillTank(): void;
    public function addCargo(): void;
}