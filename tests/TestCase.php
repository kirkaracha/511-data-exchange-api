<?php declare(strict_types=1);

namespace Kirkaracha\FiveOneOneDataDataExchange\Test;

use Kirkaracha\FiveOneOneDataDataExchange\FiveOneOneDataDataExchangeFacade;
use Kirkaracha\FiveOneOneDataDataExchange\FiveOneOneDataExchangeServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     *
     * @param $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            FiveOneOneDataExchangeServiceProvider::class
        ];
    }

    /**
     * Load package alias
     *
     * @param $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'FiveOneOneDataExchange' => FiveOneOneDataDataExchangeFacade::class,
        ];
    }
}