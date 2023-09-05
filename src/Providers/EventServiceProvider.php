<?php

namespace Amsoell\LogRequests\Providers;

use Amsoell\LogRequests\Listeners\ConnectionFailed;
use Amsoell\LogRequests\Listeners\ResponseReceived;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Http\Client\Events\ConnectionFailed as HttpConnectionFailed;
use Illuminate\Http\Client\Events\ResponseReceived as HttpResponseReceived;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        HttpResponseReceived::class => [
            ResponseReceived::class,
        ],
        HttpConnectionFailed::class => [
            ConnectionFailed::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
