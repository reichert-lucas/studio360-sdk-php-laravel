<?php

namespace Jetimob\Studio360\Tests;

use Jetimob\Studio360\Studio360ServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /** @inheritDoc */
    protected function getPackageProviders($app)
    {
        return [Studio360ServiceProvider::class];
    }
}
