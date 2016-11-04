<?php

namespace BrianFaust\Paymill\Endpoints;

class Webhook extends Endpoint
{
    protected $namespace = 'webhooks';

    protected $transformer = \BrianFaust\Paymill\Transformers\Webhook::class;
}
