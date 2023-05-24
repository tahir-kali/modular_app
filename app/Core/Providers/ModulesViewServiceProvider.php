<?php

namespace App\Core\Providers;

use Illuminate\Support\Facades\View;
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
                $moduleName = basename($moduleDirectory);
                View::addNameSpace($moduleName,$moduleDirectory.'/Views');
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
