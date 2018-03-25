<?php declare(strict_types=1);

namespace Kirkaracha\FiveOneOneDataDataExchange;

use Illuminate\Support\ServiceProvider;

class FiveOneOneDataDataExchangeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services
     *
     * @return void
     */
    public function boot(): void
    {

    }

    /**
     * Register the application services
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(FiveOneOneDataExchange::class, function () {
            return new FiveOneOneDataExchange();
        });

        $this->app->alias(FiveOneOneDataExchange::class, '511-data-exchange');
    }
}