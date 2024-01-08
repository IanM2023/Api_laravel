<?php

namespace App\Providers;

use App\Services\Geolocation\Geolocation;
use App\Services\Map\Map;
use App\Services\Satallite\Satallite;
use Illuminate\Support\ServiceProvider;

class GeorlocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(Geolocation::class, function($app) {
            $map = new Map();
            $satallite = new Satallite();

            return new Geolocation($map, $satallite);
            // return 'AAAAAAAAAAaaaaaaaa';
        });
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
