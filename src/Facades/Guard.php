<?php

namespace Visifo\Guard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Visifo\Guard\Guard
 */
class Guard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-guard-clauses';
    }
}
