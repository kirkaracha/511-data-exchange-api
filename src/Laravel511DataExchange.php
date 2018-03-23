<?php declare(strict_types=1);

namespace kirkaracha\Laravel511DataExchange;

// https://medium.com/@lasselehtinen/getting-started-on-laravel-package-development-a62110c58ba1
// https://medium.com/sureshvel/laravel-5-5-custom-packages-with-autodiscover-the-providers-5772c60d847e
// http://laraveldaily.com/how-to-create-a-laravel-5-package-in-10-easy-steps/

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