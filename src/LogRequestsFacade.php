<?php

namespace Amsoell\LogRequests;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Amsoell\LogRequests\Skeleton\SkeletonClass
 */
class LogRequestsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'log-requests';
    }
}
