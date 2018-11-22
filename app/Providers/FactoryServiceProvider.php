<?php

namespace App\Providers;

use App\Factories\DateFormat_TW;
use Illuminate\Support\ServiceProvider;

class FactoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DateFormat_TW', DateFormat_TW::class);
    }
}
