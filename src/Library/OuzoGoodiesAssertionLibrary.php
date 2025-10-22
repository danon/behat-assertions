<?php
namespace Danon\BehatAssertion\Library;

class OuzoGoodiesAssertionLibrary implements AssertionLibrary {
    public function assertEquals(mixed $expected, mixed $actual): void {
        \Ouzo\Tests\AssertAdapter::assertSame($expected, $actual);
    }

    public function assertArrayContains($expected, mixed $actualArray): void {
        \Ouzo\Tests\ArrayAssert::that($actualArray)->contains($expected);
    }
}
