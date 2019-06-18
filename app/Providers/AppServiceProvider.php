<?php

namespace App\Providers;

use App\FormQuestion;
use App\Observers\FormQuestionObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        FormQuestion::observe(FormQuestionObserver::class);
    }
}
