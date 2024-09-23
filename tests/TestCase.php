<?php

namespace YazanStash\LaravelAssertableLogs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use YazanStash\LaravelAssertableLogs\LaravelAssertableLogsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAssertableLogsServiceProvider::class,
        ];
    }
}
