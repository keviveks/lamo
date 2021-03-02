<?php

namespace App\Modules;

/**
 * ServiceProvider
 *
 * The service provider for the modules. After being registered
 * it will make sure that each of the modules are properly loaded
 * i.e. with their routes, models etc.
 *
 * @package App\Modules
 */

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class ModulesServiceProvider extends ServiceProvider
{
    /**
     * Will make sure that the required modules have been fully loaded
     *
     * @return void routeModule
     */
    public function boot() {
        // For each of the registered modules, include their routes and Views
        $modules = config("module.modules");

        while (list(,$module) = current($modules)) {
            // Load the routes for each of the modules
            if (file_exists(base_path('app/Modules/'.$module.'/routes.php'))) {
                include base_path('app/Modules/'.$module.'/routes.php');
            }
        }
    }

    public function register() { }
}
