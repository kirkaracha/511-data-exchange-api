<?php declare(strict_types=1);

namespace kirkaracha\Laravel511DataExchange;

// https://medium.com/@lasselehtinen/getting-started-on-laravel-package-development-a62110c58ba1

class Laravel511DataExchange
{
    /**
     * Multiplies the two given numbers
     * @param int $a
     * @param int $b
     * @return int
     */
    public function multiply($a, $b): int
    {
        return $a * $b;
    }

}