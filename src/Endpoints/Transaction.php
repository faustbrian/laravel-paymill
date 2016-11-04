<?php

namespace BrianFaust\Paymill\Endpoints;

class Transaction extends Endpoint
{
    protected $namespace = 'transactions';

    protected $transformer = \BrianFaust\Paymill\Transformers\Transaction::class;
}
