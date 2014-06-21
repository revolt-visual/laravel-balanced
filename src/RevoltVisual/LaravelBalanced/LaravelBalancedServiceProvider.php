<?php 

namespace RevoltVisual\LaravelBalanced;

use Illuminate\Support\ServiceProvider;
use \Balanced;

class LaravelBalancedServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		\Httpful\Bootstrap::init();
		\RESTful\Bootstrap::init();
		\Balanced\Bootstrap::init();
		$this->package('revolt-visual/laravel-balanced');
		Balanced\Settings::$api_key = $this->app['config']->get('laravel-balanced::balanced.secret_key');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
