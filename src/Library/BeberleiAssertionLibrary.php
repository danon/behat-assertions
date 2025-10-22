<?php
namespace Danon\BehatAssertion\Library;

class BeberleiAssertionLibrary implements AssertionLibrary {
    public function assertEquals(mixed $expected, mixed $actual): void {
        \Assert\Assertion::same($expected, $actual);
    }

    public function assertArrayContains($expected, mixed $actualArray): void {
        \Assert\Assertion::inArray($expected, $actualArray);
    }
}
