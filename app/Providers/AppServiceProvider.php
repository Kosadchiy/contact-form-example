<?php

namespace App\Providers;

use App\FormFile;
use App\FormAnswer;
use App\FormQuestion;
use App\Observers\FormFileObserver;
use App\Observers\FormAnswerObserver;
use App\Observers\FormQuestionObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');
        FormQuestion::observe(FormQuestionObserver::class);
        FormAnswer::observe(FormAnswerObserver::class);
        FormFile::observe(FormFileObserver::class);
    }
}
