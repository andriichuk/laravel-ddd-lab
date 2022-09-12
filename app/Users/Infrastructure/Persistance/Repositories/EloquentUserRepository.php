<?php

declare(strict_types=1);

namespace App\Users\Infrastructure\Persistance\Repositories;

use App\Users\Domain\UserRepository;
use App\Users\Models\User;

final class EloquentUserRepository implements UserRepository
{
    public function findByEmail(string $email): User
    {
        return User::where('email', $email)->first();
    }
}
