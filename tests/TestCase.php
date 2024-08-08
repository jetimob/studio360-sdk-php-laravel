<?php

namespace Jetimob\Studio360\Tests;

use Jetimob\Studio360\Studio360ServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Método para prover a injeção do Studio Service Provider
     * nos testes de unidade e integração
     */
    protected function getPackageProviders($app)
    {
        return [Studio360ServiceProvider::class];
    }
}
