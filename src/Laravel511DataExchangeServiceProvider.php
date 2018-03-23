<?php declare(strict_types=1);

namespace kirkaracha\Laravel511DataExchange;

class Laravel511DataExchangeServiceProvider extends ServiceProvider
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
        $this->app->singleton(Laravel511DataExchange::class, function () {
            return new Laravel511DataExchange();
        });

        $this->app->alias(Laravel511DataExchange::class, 'laravel-511-data-exchange');
    }
}