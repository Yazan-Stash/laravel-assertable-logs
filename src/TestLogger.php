<?php

namespace YazanStash\LaravelAssertableLogs;

use Monolog\Logger;
use Illuminate\Testing\TestResponseAssert as PHPUnit;

class TestLogger extends Logger
{
    public function assertLogged($message)
    {
        $records = app('log')
            ->getHandlers()[0]
            ->getRecords();

        $found = collect($records)
            ->contains(function ($record) use ($message) {
                return $record->message === $message;
            });

        return tap($found, function ($found) use ($message) {
            PHPUnit::assertTrue($found, "Expected message [\"{$message}\"] was not logged.");
        });
    }
}
