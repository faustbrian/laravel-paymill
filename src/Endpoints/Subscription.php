<?php

namespace BrianFaust\Paymill\Endpoints;

class Subscription extends Endpoint
{
    protected $namespace = 'subscriptions';

    protected $transformer = \BrianFaust\Paymill\Transformers\Subscription::class;
}
