<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Paymill.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Paymill\Endpoints;

class Refund extends Endpoint
{
    protected $namespace = 'refunds';

    protected $transformer = \BrianFaust\Paymill\Transformers\Refund::class;
}
