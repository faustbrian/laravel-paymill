<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Paymill.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Paymill\Endpoints;

class Payment extends Endpoint
{
    protected $namespace = 'payments';

    protected $transformer = \BrianFaust\Paymill\Transformers\Payment::class;
}
