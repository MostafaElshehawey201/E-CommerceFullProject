<?php

namespace App\Providers;

use App\Interfaces\ProfileDataUserInterface;
use App\Properties\ProfileDataUserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(
            ProfileDataUserInterface::class,
            ProfileDataUserRepository::class,
        );
    }


    public function boot(): void
    {
        //
    }
}
