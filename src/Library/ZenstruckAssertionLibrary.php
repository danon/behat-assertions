<?php
namespace Danon\BehatAssertion\Library;

use Zenstruck;

class ZenstruckAssertionLibrary implements AssertionLibrary {
    public function assertEquals(mixed $expected, mixed $actual): void {
        Zenstruck\Assert::that($actual)->is($expected);
    }

    public function assertArrayContains($expected, mixed $actualArray): void {
        Zenstruck\Assert::that($actualArray)->contains($expected);
    }
}
