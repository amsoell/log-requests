<?php

namespace Amsoell\LogRequests\Listeners;

use Amsoell\LogRequests\LogRequestsFacade;
use Illuminate\Http\Client\Events\ResponseReceived as HttpResponseReceived;

class ResponseReceived
{
    public function handle(HttpResponseReceived $event)
    {
        LogRequestsFacade::log(
            message: 'Http Request',
            request: $event->request,
            response: $event->response,
        );
    }
}
