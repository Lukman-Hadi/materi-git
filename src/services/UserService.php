<?php
declare(strict_types=1);

namespace App\Services;

class UserService
{
    private array $users = [
        ['id' => '1', 'name' => 'Ayla', 'email' => 'ayla@example.com'],
        ['id' => '2', 'name' => 'Bimo', 'email' => 'bimo@example.com'],
    ];

    public function listUsers(): array
    {
        return $this->users;
    }

    public function getUserById(string $id): ?array
    {
        foreach ($this->users as $u) {
            if ($u['id'] === $id) {
                return $u;
            }
        }
        return null;
    }
}