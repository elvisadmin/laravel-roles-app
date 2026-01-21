<?php

namespace ElvisAdmin\LaravelRoles;

use Illuminate\Support\ServiceProvider;

class LaravelRolesServiceProvider extends ServiceProvider
{
    public function register()
    {
        // bind things if needed
    }

        public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
