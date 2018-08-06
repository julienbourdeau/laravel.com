<?php

namespace App\Providers;

use Algolia\AlgoliaSearch\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        $this->app->singleton(Client::class, function () {
            return Client::create(
                config('services.algolia.id'),
                config('services.algolia.key')
            );
        });
    }
}
