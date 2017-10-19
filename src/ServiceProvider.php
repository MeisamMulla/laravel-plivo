<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Plivo\RestAPI as Plivo;

class ServiceProvider extends ServiceProvider {
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->singleton('Plivo', function ($app) {
			return new Plivo($app['config']['plivo']['auth_id'], $app['config']['plivo']['auth_token']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return ['Plivo'];
	}
}
