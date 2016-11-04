<?php

namespace BrianFaust\Paymill;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->singleton('paymill', function ($app) {
            return new Client(config('services.paymill.secret'));
        });
    }

    public function provides()
    {
        return ['paymill'];
    }
}
