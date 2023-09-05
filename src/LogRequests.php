<?php

namespace Amsoell\LogRequests;

use Illuminate\Http\Client\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    public function log(string $message, Request $request, Response $response = null)
    {
        Log::channel(config('log-requests.driver') ?? config('logging.default'))
            ->log(
                config('log-requests.level') ?? 'info',
                $message,
                [
                    'request' => [
                        'headers' => $request->headers(),
                        'body' => $request->body(),
                    ],
                    'response' => $response ? [
                        'headers' => $response->headers(),
                        'body' => $response->body(),
                    ] : null,
                ],
            );
    }
}
