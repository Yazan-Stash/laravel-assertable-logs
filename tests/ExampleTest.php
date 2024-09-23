<?php

namespace YazanStash\LaravelAssertableLogs\Tests;

use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\Attributes\Test;

class ExampleTest extends TestCase
{
    #[Test]
    public function asd()
    {
        logger('salskdlasd');

        Log::assertLogged('salskdlasd');

        $this->assertTrue(true);
    }
}
