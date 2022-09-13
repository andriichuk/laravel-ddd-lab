<?php

declare(strict_types=1);

namespace App\Users\Application\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;

final class UploadAvatarHandler
{
    public function __construct(
        private readonly Application $application
    ) {}

    public function store()
    {
        $this->application->getLocale();
    }
}
