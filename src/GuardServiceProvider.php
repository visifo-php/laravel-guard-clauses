<?php

namespace visifo-namespace\Guard;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use visifo-namespace\Guard\Commands\GuardCommand;

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
            ->hasViews()
            ->hasMigration('create_laravel-guard-clauses_table')
            ->hasCommand(GuardCommand::class);
    }
}
