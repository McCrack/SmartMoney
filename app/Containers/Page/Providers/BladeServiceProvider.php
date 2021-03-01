<?php

namespace App\Containers\Page\Providers;

use Illuminate\Support\Facades\Blade;
use App\Containers\Page\UI\WEB\Components;
use App\Ship\Parents\Providers\MainProvider;

class BladeServiceProvider extends MainProvider
{
    /**
     * Register anything in the container.
     */
    public function register(): void
    {
        parent::register();
    }

    /**
     * Bootstrap the application services.
     * @return void
     */
    public function boot(): void
    {
        Blade::component(Components\Branch::class, 'branch');
        Blade::component(Components\LevelMenu::class, 'level-menu');
        Blade::component(Components\Breadcrumbs::class, 'breadcrumbs');
    }
}
