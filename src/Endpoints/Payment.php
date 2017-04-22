<?php



declare(strict_types=1);

namespace BrianFaust\Paymill\Endpoints;

class Payment extends Endpoint
{
    protected $namespace = 'payments';

    protected $transformer = \BrianFaust\Paymill\Transformers\Payment::class;
}
