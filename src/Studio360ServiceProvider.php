<?php

namespace Jetimob\Studio360;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Jetimob\Studio360\Console\Studio360InstallPackage;

class Studio360ServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot(): void
    {
        $src = realpath($raw = __DIR__ . '/../config/studio360.php') ?: $raw;

        if ($this->app->runningInConsole()) {
            $this->publishes([$src => config_path('studio360.php')], 'config');
            $this->commands([
                Studio360InstallPackage::class,
            ]);
        }

        $this->mergeConfigFrom($src, 'studio360');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('jetimob.studio360', function (Container $app) {
            return new Studio360($app['config']['studio360'] ?? []);
        });

        $this->app->alias('jetimob.studio360', Studio360::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'jetimob.studio360',
        ];
    }
}
