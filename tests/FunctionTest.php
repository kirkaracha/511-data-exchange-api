<?php declare(strict_types=1);

namespace kirkaracha\Laravel511DataExchange\Test;

class FunctionTest extends TestCase
{
    /**
     * Check that the multiply method returns correct result
     * @return void
     */
    public function testMultiplyReturnsCorrectValue(): void
    {
        $this->assertSame(MyPackage::multiply(4, 4), 16);
        $this->assertSame(MyPackage::multiply(2, 9), 18);
    }
}
