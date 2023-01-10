<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use RuntimeException;

use function App\Helpers\add;

class AdditionTest extends TestCase
{
    /**
     * @dataProvider dataTestEquals
     */
    public function test_equals(int $x, int $y, int $expected)
    {
        $actual = add($x, $y);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider dataTestNotEquals
     */
    public function test_not_equals(int $x, int $y, int $expected)
    {
        $actual = add($x, $y);
        $this->assertNotEquals($expected, $actual);
    }

    public function dataTestEquals(): array
    {
        return [
            "four" => [1, 1, 2],
            "five" => [2, 3, 5],
            "seven" => [1, 6, 7],
            "incorrect" => [7, 8, 19]
        ];
    }

    public function dataTestNotEquals(): array
    {
        return [
            [2, 4, 8]
        ];
    }

    public function test_that_something()
    {
    }
}
