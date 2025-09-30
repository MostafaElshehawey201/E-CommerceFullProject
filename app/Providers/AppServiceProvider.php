<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\AddItemsToCartInterface;
use App\Interfaces\EditDataProductInterface;
use App\Interfaces\ProfileDataUserInterface;
use Laravel\Fortify\Contracts\LoginResponse;
use App\Interfaces\AddProdcutToCartInterface;
use App\Interfaces\AddProductToCartInterface;
use App\Interfaces\CreateNewProductInterface;
use App\Properties\ProfileDataUserRepository;
use App\Repositories\AddItemToCartRepository;
use App\Interfaces\CreateNewCategoryInterface;
use App\Repositories\EditDataProductRepository;
use App\Interfaces\CreateNewDepartmentInterface;
use App\Repositories\AddProductToCartRepository;
use App\Repositories\CreateNewProductRepository;
use App\Repositories\EditDataCategoryRepository;
use App\Interfaces\EditDataCategoryDataInterface;
use App\Repositories\CreateNewCategoryRepository;
use App\Repositories\CreateNewDepartmentRepository;

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
        $this->app->bind(
            EditDataProductInterface::class,
            EditDataProductRepository::class
        );
        $this->app->bind(
            EditDataCategoryDataInterface::class,
            EditDataCategoryRepository::class,
        );

        $this->app->bind(
            AddItemsToCartInterface::class ,
            AddItemToCartRepository::class
        );
        $this->app->bind(
            AddProductToCartInterface::class,
            AddProductToCartRepository::class
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
