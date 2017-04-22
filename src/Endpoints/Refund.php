<?php



declare(strict_types=1);

namespace BrianFaust\Paymill\Endpoints;

class Refund extends Endpoint
{
    protected $namespace = 'refunds';

    protected $transformer = \BrianFaust\Paymill\Transformers\Refund::class;
}
