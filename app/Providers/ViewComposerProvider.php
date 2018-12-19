<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        TODO specify the views that contain price only
        view()->composer(
            '*',
            'App\Http\ViewComposers\CurrencyComposer'
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
