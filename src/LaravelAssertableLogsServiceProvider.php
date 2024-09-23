<?php

namespace Yazan Stash\LaravelAssertableLogs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yazan Stash\LaravelAssertableLogs\Commands\LaravelAssertableLogsCommand;

class LaravelAssertableLogsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-assertable-logs')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_assertable_logs_table')
            ->hasCommand(LaravelAssertableLogsCommand::class);
    }
}
