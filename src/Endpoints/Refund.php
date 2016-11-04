<?php

namespace BrianFaust\Paymill\Endpoints;

class Refund extends Endpoint
{
    protected $namespace = 'refunds';

    protected $transformer = \BrianFaust\Paymill\Transformers\Refund::class;
}
