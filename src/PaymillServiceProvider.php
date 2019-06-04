<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Paymill.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Paymill;

class PaymillServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton('paymill', function ($app) {
            return new Client(config('services.paymill.secret'));
        });
    }
}
