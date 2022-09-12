<?php

declare(strict_types=1);

namespace App\Users\Application\Providers;

use App\Users\Domain\UserRepository;
use App\Users\Infrastructure\Persistance\Repositories\EloquentUserRepository;
use Illuminate\Support\ServiceProvider;

final class ContextServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(UserRepository::class, EloquentUserRepository::class);
    }
}
