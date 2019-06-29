<?php declare(strict_types=1);

namespace Kirkaracha\FiveOneOneDataDataExchange\Test;

use Kirkaracha\FiveOneOneDataDataExchange\FiveOneOneDataExchange;

class FunctionTest extends TestCase
{
    /**
     * Check that the multiply method returns correct result
     *
     * @return void
     */
    public function testMultiplyReturnsCorrectValue(): void
    {
        $this->assertSame(FiveOneOneDataExchange::multiply(4, 4), 16);
        $this->assertSame(FiveOneOneDataExchange::multiply(2, 9), 18);
    }
}
