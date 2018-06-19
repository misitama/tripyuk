<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryAppProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\\Repositories\\Contracts\\IUserRepository', 'App\\Repositories\\Actions\UserRepository');
        $this->app->bind('App\\Repositories\\Contracts\\IRoleRepository', 'App\\Repositories\\Actions\RoleRepository');
        $this->app->bind('App\\Repositories\\Contracts\\IProvinceRepository', 'App\\Repositories\\Actions\ProvinceRepository');
        $this->app->bind('App\\Repositories\\Contracts\\IRegencyRepository', 'App\\Repositories\\Actions\RegencyRepository');
        $this->app->bind('App\\Repositories\\Contracts\\IDistrictRepository', 'App\\Repositories\\Actions\DistrictRepository');
        $this->app->bind('App\\Repositories\\Contracts\\IMasterBedTypeRepository', 'App\\Repositories\\Actions\MasterBedTypeRepository');
        $this->app->bind('App\\Repositories\\Contracts\\IRestaurantTypeRepository', 'App\\Repositories\\Actions\RestaurantTypeRepository');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
