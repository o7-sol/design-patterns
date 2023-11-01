<?php

declare(strict_types=1);

namespace Design\Pattern\Composite;

use Design\Pattern\Composite\RentalUnitCollection;
use Design\Pattern\Composite\RentalUnit;

class AdsBoard extends RentalUnitCollection
{
    public function addRentalUnit(RentalUnit $rentalUnit): void
    {
        if (in_array($rentalUnit, $this->rentalUnits, true)) {
            return;
        }

        $this->rentalUnits[] = $rentalUnit;
    }

    public function removeRentalUnit(RentalUnit $rentalUnit): void
    {
        $rentalUnits = [];

        foreach($this->rentalUnits as $existingRentalUnit) {
            if ($existingRentalUnit !== $rentalUnit) {
                $rentalUnits[] = $existingRentalUnit;
            }
        }

        $this->rentalUnits = $rentalUnits;
    }
}