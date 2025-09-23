<?php

namespace App\Providers;

use App\Interfaces\CreateNewCategoryInterface;
use App\Interfaces\CreateNewDepartmentInterface;
use App\Interfaces\CreateNewProductInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\ProfileDataUserInterface;
use Laravel\Fortify\Contracts\LoginResponse;
use App\Properties\ProfileDataUserRepository;
use App\Repositories\CreateNewCategoryRepository;
use App\Repositories\CreateNewDepartmentRepository;
use App\Repositories\CreateNewProductRepository;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(
            ProfileDataUserInterface::class,
            ProfileDataUserRepository::class,
        );
        $this->app->bind(
            CreateNewDepartmentInterface::class,
            CreateNewDepartmentRepository::class
        );
        $this->app->bind(
            CreateNewCategoryInterface::class,
            CreateNewCategoryRepository::class,
        );
        $this->app->bind(
            CreateNewProductInterface::class,
            CreateNewProductRepository::class,
        );
    }


    public function boot(): void
    {
         $this->app->singleton(LoginResponse::class, function () {
            return new class implements LoginResponse {
                public function toResponse($request)
                {
                    $user = Auth::user();

                    if (in_array($user->role->name, ['Admin', 'SuperAdmin'])) {
                        return redirect()->route('AdminDashBoard');
                    } elseif (in_array($user->role->name, ['Employee', 'Customer'])) {
                        return redirect()->route('CustomerDashBoard');
                    }

                    return redirect('/'); // fallback
                }
            };
        });
    }
}
