<?php

namespace Visifo\GuardClauses\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Visifo\GuardClauses\Providers\GuardServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            GuardServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
