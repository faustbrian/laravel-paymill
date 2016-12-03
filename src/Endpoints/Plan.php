<?php

/*
 * This file is part of Laravel Paymill.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Paymill\Endpoints;

class Plan extends Endpoint
{
    protected $namespace = 'offers';

    protected $transformer = \BrianFaust\Paymill\Transformers\Plan::class;
}
