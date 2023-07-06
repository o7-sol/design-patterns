<?php

declare(strict_types=1);

namespace Design\Pattern\Adapter;

interface TwoFactorAuth
{
    public function login(): string;
}