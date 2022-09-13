<?php

declare(strict_types=1);

namespace App\Users\Application\Providers;

use App\Users\Domain\UserRepository;
use App\Users\Infrastructure\Persistence\Repositories\EloquentUserRepository;
use Illuminate\Support\ServiceProvider;

final class UsersContextServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(UserRepository::class, EloquentUserRepository::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom($this->app->basePath('app/Users/Infrastructure/Persistence'));
    }
}
