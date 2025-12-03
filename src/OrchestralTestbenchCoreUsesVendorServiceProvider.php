<?php

namespace Esign\OrchestralTestbenchCoreUsesVendor;

use Illuminate\Support\ServiceProvider;

class OrchestralTestbenchCoreUsesVendorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([$this->configPath() => config_path('orchestral-testbench-core-uses-vendor.php')], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'orchestral-testbench-core-uses-vendor');

        $this->app->singleton('orchestral-testbench-core-uses-vendor', function () {
            return new OrchestralTestbenchCoreUsesVendor;
        });
    }

    protected function configPath(): string
    {
        return __DIR__ . '/../config/orchestral-testbench-core-uses-vendor.php';
    }
}
