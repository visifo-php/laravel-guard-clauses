<?php

namespace Visifo\GuardClauses\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Visifo\GuardClauses\Guard
 */
class Guard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-guard-clauses';
    }
}
