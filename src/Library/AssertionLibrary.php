<?php
namespace Danon\BehatAssertion\Library;

interface AssertionLibrary {
    public function assertEquals(mixed $expected, mixed $actual): void;

    public function assertArrayContains($expected, mixed $actualArray): void;
}
