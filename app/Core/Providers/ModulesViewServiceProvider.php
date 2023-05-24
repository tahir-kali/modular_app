<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;
class ModulesViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $modulesPath = app_path('Modules');
        if (File::isDirectory($modulesPath)) {
            $moduleDirectories = File::directories($modulesPath);
            foreach ($moduleDirectories as $moduleDirectory) {
                $filename = basename($moduleDirectory);
                $this->loadViewsFrom(base_path($moduleDirectory.'/Views'), $filename);
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
