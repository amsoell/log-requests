<?php

namespace Amsoell\LogRequests;

use Amsoell\LogRequests\Providers\EventServiceProvider;
use Illuminate\Support\ServiceProvider;

class LogRequestsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('log-requests.php'),
            ], 'laravel-assets');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'log-requests');

        $this->app->singleton('log-requests', function () {
            return new LogRequests();
        });

        $this->app->register(EventServiceProvider::class);
    }
}
