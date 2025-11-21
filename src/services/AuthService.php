<?php
declare(strict_types=1);

namespace App\Services;

class AuthService
{
    public function isTokenExpired(int $expiryMs): bool
    {
        return (int) (microtime(true) * 1000) > $expiryMs;
    }

}