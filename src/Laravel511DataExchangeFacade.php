<?php declare(strict_types=1);

namespace kirkaracha\Laravel511DataExchange;

use Illuminate\Support\Facades\Facade;

class Laravel511DataExchangeFacade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-511-data-exchange';
    }
}
