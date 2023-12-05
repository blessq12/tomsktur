<?php

namespace App\Providers;

use App\Models\Company;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //define hint for layouts to use path as layouts::*
        $this->loadViewsFrom(resource_path('/views/layouts/'), 'layouts');

        // add company variable over all errors views
        View::composer('errors::*', function($view){
            $view->with('company', Company::first());
        });
    }
}
