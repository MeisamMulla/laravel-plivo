<?php

namespace MeisamMulla\Plivo;

use Illuminate\Support\ServiceProvider;
use Plivo\RestAPI as PlivoAPI;

class ServiceProvider extends ServiceProvider {
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->singleton('Plivo', function ($app) {
			return new PlivoAPI($app['config']['plivo']['auth_id'], $app['config']['plivo']['auth_token']);
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
