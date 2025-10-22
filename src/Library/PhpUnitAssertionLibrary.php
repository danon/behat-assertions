<?php
namespace Danon\BehatAssertion\Library;

class PhpUnitAssertionLibrary implements AssertionLibrary {
    public function __construct() {
        (new \PHPUnit\TextUI\Configuration\Builder())->build([]);
    }

    public function assertEquals(mixed $expected, mixed $actual): void {
        \PHPUnit\Framework\Assert::assertSame($expected, $actual);
    }

    public function assertArrayContains($expected, mixed $actualArray): void {
        \PHPUnit\Framework\Assert::assertContains($expected, $actualArray);
    }
}
