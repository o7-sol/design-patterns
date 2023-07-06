<?php

declare(strict_types=1);

namespace Design\Pattern\Adapter\Service;

use Design\Pattern\Adapter\TwoFactorAuth;

class AuthService
{
    public function authenticate(TwoFactorAuth $twoFactorAuth): void
    {
        echo $twoFactorAuth->login();

        // create session, do other login operations
    }
}