<?php



declare(strict_types=1);

namespace BrianFaust\Paymill\Endpoints;

class Subscription extends Endpoint
{
    protected $namespace = 'subscriptions';

    protected $transformer = \BrianFaust\Paymill\Transformers\Subscription::class;
}
