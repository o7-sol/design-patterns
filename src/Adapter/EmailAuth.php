<?php

declare(strict_types=1);

namespace Design\Pattern\Adapter;

use Design\Pattern\Adapter\TwoFactorAuth;

class EmailAuth implements TwoFactorAuth
{
    public function login(): string
    {
        return 'Logged in with Email';
    }
}