<?php
namespace Danon\BehatAssertion\Library;

class WebmozartAssertionLibrary implements AssertionLibrary {
    public function assertEquals(mixed $expected, mixed $actual): void {
        \Webmozart\Assert\Assert::same($actual, $expected);
    }

    public function assertArrayContains($expected, mixed $actualArray): void {
        \Webmozart\Assert\Assert::inArray($expected, $actualArray);
    }
}
