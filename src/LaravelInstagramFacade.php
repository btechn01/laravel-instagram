<?php

namespace Btechn01\LaravelInstagram;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Btechn01\LaravelInstagram\Skeleton\SkeletonClass
 */
class LaravelInstagramFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     * @codeCoverageIgnore
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-instagram';
    }
}
