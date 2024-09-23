<?php

namespace Yazan Stash\LaravelAssertableLogs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yazan Stash\LaravelAssertableLogs\LaravelAssertableLogs
 */
class LaravelAssertableLogs extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Yazan Stash\LaravelAssertableLogs\LaravelAssertableLogs::class;
    }
}
