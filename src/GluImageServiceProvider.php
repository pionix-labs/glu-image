<?php

namespace PionixLabs\GluImage;

use Illuminate\Support\ServiceProvider;

class GluImageServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('glu-image', 'PionixLabs\GluImage\GluImage');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('glu-image');
    }
}
