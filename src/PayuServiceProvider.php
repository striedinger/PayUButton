<?php

namespace striedinger\PayUButton;

use Illuminate\Support\ServiceProvider;

class PayuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind('Payu', function($app){
            return new Payu();
        });
    }
	
}
