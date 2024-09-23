<?php

namespace Yazan Stash\LaravelAssertableLogs\Commands;

use Illuminate\Console\Command;

class LaravelAssertableLogsCommand extends Command
{
    public $signature = 'laravel-assertable-logs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
