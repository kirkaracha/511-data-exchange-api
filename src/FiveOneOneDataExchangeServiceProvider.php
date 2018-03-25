<?php declare(strict_types=1);

namespace Kirkaracha\FiveOneOneDataDataExchange;

use Illuminate\Support\ServiceProvider;

class FiveOneOneDataExchangeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/511-data-exchange.php' => config_path('511-data-exchange.php'),
        ]);
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