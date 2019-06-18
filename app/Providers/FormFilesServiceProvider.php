<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormFilesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\Contracts\FormFilesServiceInterface', 
            'App\Services\FormFilesService'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
