<?php



declare(strict_types=1);

namespace BrianFaust\Paymill\Endpoints;

class Plan extends Endpoint
{
    protected $namespace = 'offers';

    protected $transformer = \BrianFaust\Paymill\Transformers\Plan::class;
}
