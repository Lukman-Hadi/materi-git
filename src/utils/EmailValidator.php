<?php
declare(strict_types=1);

namespace App\Utils;

class EmailValidator
{
    public static function isValid(string $email): bool
    {
        return (bool) preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email);
    }
}