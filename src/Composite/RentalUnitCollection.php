<?php

declare(strict_types=1);

namespace Design\Pattern\Composite;

use Design\Pattern\Composite\RentalUnit;

abstract class RentalUnitCollection implements RentalUnit
{
    protected $rentalUnits = [];

    abstract public function addRentalUnit(RentalUnit $rentalUnit): void;
    abstract public function removeRentalUnit(RentalUnit $rentalUnit): void;

    public function getRentalUnits(): array
    {
        return $this->rentalUnits;
    }

    public function getRentalUnitsCount(): int
    {
        return count($this->rentalUnits);
    }
}