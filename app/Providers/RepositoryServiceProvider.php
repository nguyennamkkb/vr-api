<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register Interface and Repository in here
        // You must place Interface in first place
        // If you dont, the Repository will not get readed.
        $this->app->bind(
            'App\Interfaces\CodeInterface',
            'App\Repositories\CodeRepository'
        );
        $this->app->bind(
            'App\Interfaces\ReaderInterface',
            'App\Repositories\ReaderRepository'
        );
        $this->app->bind(
            'App\Interfaces\UnitInterface',
            'App\Repositories\UnitRepository'
        );

        $this->app->bind(
            'App\Interfaces\BiometricInterface',
            'App\Repositories\BiometricRepository'
        );
        $this->app->bind(
            'App\Interfaces\TypeBiometricInterface',
            'App\Repositories\TypeBiometricRepository'
        );
        
        $this->app->bind(
            'App\Interfaces\UserInterface',
            'App\Repositories\UserRepository'
        );
        $this->app->bind(
            'App\Interfaces\UserBiometricInterface',
            'App\Repositories\UserBiometricRepository'
        );
        $this->app->bind(
            'App\Interfaces\PassedTheGateInterface',
            'App\Repositories\PassedTheGateRepository'
        );
    }
}