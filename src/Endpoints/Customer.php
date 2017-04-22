<?php



declare(strict_types=1);

namespace BrianFaust\Paymill\Endpoints;

class Customer extends Endpoint
{
    protected $namespace = 'clients';

    protected $transformer = \BrianFaust\Paymill\Transformers\Customer::class;
}
