<?php



declare(strict_types=1);

namespace BrianFaust\Paymill;

class PaymillServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('paymill', function ($app) {
            return new Client(config('services.paymill.secret'));
        });
    }

    public function provides(): array
    {
        return ['paymill'];
    }
}
