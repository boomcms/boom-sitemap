<?php

namespace BoomCMS\Sitemap;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views/boom', 'boom');
				
        include __DIR__ . '/../../routes.php';
    }

    /**
	 *
	 * @return void
	 */
    public function register()
    {
    }
}