<?php

namespace visifo-namespace\Guard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \visifo-namespace\Guard\Guard
 */
class Guard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-guard-clauses';
    }
}
