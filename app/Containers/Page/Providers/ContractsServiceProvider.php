<?php

namespace App\Containers\Page\Providers;

use App\Ship\Parents\Providers\MainProvider;

use App\Containers\Page\Values;
use App\Containers\Page\Contracts;

/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 */
class ContractsServiceProvider extends MainProvider
{
    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [];

    /**
     * Register anything in the container.
     */
    public function register()
    {
        parent::register();

        $this->app->singleton(Contracts\Sitemap::class, Values\Sitemap::class);
    }
}
