<?php

namespace Esign\OrchestralTestbenchCoreUsesVendor\Tests;

use Esign\OrchestralTestbenchCoreUsesVendor\OrchestralTestbenchCoreUsesVendorServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [OrchestralTestbenchCoreUsesVendorServiceProvider::class];
    }
} 