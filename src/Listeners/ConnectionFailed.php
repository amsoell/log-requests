<?php

namespace Amsoell\LogRequests\Listeners;

use Amsoell\LogRequests\LogRequestsFacade;
use Illuminate\Http\Client\Events\ConnectionFailed as HttpConnectionFailed;

class ConnectionFailed
{
    public function handle(HttpConnectionFailed $event)
    {
        LogRequestsFacade::log(
            message: 'Http Connection Failed',
            request: $event->request,
        );

    }
}
