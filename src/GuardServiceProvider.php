<?php

namespace Visifo\Guard;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Visifo\Guard\Commands\GuardCommand;

class GuardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-guard-clauses')
            ->hasConfigFile()
            ->hasCommand(GuardCommand::class);
    }
}
