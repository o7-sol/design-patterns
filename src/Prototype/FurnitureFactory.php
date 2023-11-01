<?php

declare(strict_types=1);

namespace Design\Pattern\Prototype;

use Design\Pattern\Prototype\Table\TableInterface;
use Design\Pattern\Prototype\Chair\ChairInterface;

class FurnitureFactory
{
    public function __construct(
        private readonly ChairInterface $chair,
        private readonly TableInterface $table,
    )
    {

    }

    public function getChair(): ChairInterface
    {
        return clone $this->chair;
    }

    public function getTable(): TableInterface
    {
        return clone $this->table;
    }
}