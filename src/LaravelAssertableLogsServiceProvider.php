<?php

namespace YazanStash\LaravelAssertableLogs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAssertableLogsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('laravel-assertable-logs');
    }

    public function packageBooted()
    {
        config()->set('logging.channels.assertable-test-logs', [
            'driver' => 'custom',
            'via' => CreateTestLogger::class,
        ]);

        config()->set('logging.default', 'assertable-test-logs');
    }
}
