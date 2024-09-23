<?php

namespace YazanStash\LaravelAssertableLogs;

use Monolog\Handler\TestHandler;

class CreateTestLogger
{
    /**
     * Create a custom Monolog instance.
     *
     * @return \YazanStash\LaravelAssertableLogs\TestLogger
     */
    public function __invoke(array $config)
    {
        $monolog = new TestLogger('assertable-test-logs');
        $monolog->pushHandler(new TestHandler);

        return $monolog;
    }
}
