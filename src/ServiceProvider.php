<?php

namespace MeisamMulla\Plivo;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Plivo\RestAPI as PlivoAPI;

class ServiceProvider extends IlluminateServiceProvider {
	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot() {
		$this->publishes([
			__DIR__ . '/../plivo.php' => config_path('plivo.php'),
		]);
	}

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
