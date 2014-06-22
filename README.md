Stripe for Laravel 4
==============

Integrates the Balanced Payments PHP library with Laravel 4 via a ServiceProvider and config extensions.


### Installation

Include laravel-balanced as a dependency in composer.json:

~~~
"revolt-visual/laravel-balanced": "dev-master"
~~~

Run `composer install` to download the dependency.

Add the ServiceProvider to your provider array within `app/config/app.php`:

~~~
'providers' => array(

    'RevoltVisual\LaravelBalanced\LaravelBalancedServiceProvider'

)
~~~

Finally, publish the configuration files via `php artisan config:publish revolt-visual/laravel-balanced`.


### Configuration

It is advisable to keep all of your sensitive configuration out of your configuration files. Instead, utilize Laravel's "dot files" to keep them out of source control and making them easily overridable on dev environments.

If you have not setup a "dot file", read Laravel's "[Protecting Sensitive Configuration](http://laravel.com/docs/configuration#protecting-sensitive-configuration) for detailed setup instructions. To quickly get up an running, simply create a `.env.php` file in the same directory as you apps `composer.json` file. Then add your Stripe API credentials to it.

~~~
<?php
return array(
  'balanced' => array(
    'api_key' => 'your-api-key',
    'secret_key' => 'your-secret-key'
  )
);
~~~

If you insist on keeping your API credentials in your config, you can set your API Key and Publishable Key in `app/config/packages/revolt-visual/laravel-balanced/balanced.php`:

~~~
<?php
return array(
	'api_key' => 'your-api-key',
	'secret_key' => 'your-secret-key'
);
~~~

### Usage

You may use the [Balanced PHP Library](https://docs.balancedpayments.com/1.1/api/) as normal within your application. The Balanced API will automatically be configured with your Secret Key, so you do not need to set it yourself.

### Extra

Under you app.php file you may add aliases for each of the Balanced Payments Classes ex.

~~~
  'Balanced' 		  => 'Balanced\Marketplace',
  'Balanced_Card' 		  => 'Balanced\Card',
~~~
