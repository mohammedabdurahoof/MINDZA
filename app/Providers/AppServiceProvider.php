<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

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
        // URL::forceRootUrl('https://improved-fishstick-6pvwp7qr4p725xvw-8000.app.github.dev');
        // URL::forceScheme('https');
        Schema::defaultStringLength(191);
    }
}
