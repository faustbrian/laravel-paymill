<?php



declare(strict_types=1);

namespace BrianFaust\Paymill\Endpoints;

class Preauthorization extends Endpoint
{
    protected $namespace = 'preauthorizations';

    protected $transformer = \BrianFaust\Paymill\Transformers\Preauthorization::class;
}
