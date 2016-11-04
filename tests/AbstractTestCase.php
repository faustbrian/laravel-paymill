<?php

namespace BrianFaust\Tests\Paymill;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return \BrianFaust\Paymill\ServiceProvider::class;
    }
}
