<?php

declare(strict_types=1);

namespace App\Users\Domain;

use App\Users\Models\User;

interface UserRepository
{
    public function findByEmail(string $email): User;
}
