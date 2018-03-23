<?php declare(strict_types=1);

namespace kirkaracha\Laravel511DataExchange\Test;

use Illuminate\Foundation\Application;
use kirkaracha\Laravel511DataExchange\Laravel511DataExchangeFacade;
use kirkaracha\Laravel511DataExchange\Laravel511DataExchangeServiceProvider;
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
            Laravel511DataExchangeServiceProvider::class
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
            'Laravel511DataExchange' => Laravel511DataExchangeFacade::class,
        ];
    }
}