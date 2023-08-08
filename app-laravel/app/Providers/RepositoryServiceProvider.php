<?php

namespace App\Providers;

use App\Interfaces\VagaRepositoryInterface;
use App\Repositories\VagaRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(VagaRepositoryInterface::class, VagaRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
