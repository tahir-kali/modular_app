<?php

namespace App\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class ModulesMigrationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $modulesPath = app_path('Modules');
                if (File::isDirectory($modulesPath)) {
                    $moduleDirectories = File::directories($modulesPath);
                    foreach ($moduleDirectories as $moduleDirectory) {
                        $this->loadMigrationsFrom($moduleDirectory . '/database/migrations');
                    }
                }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //



    }
}
