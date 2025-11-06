<?php
namespace Danon\BehatAssertion\Library;

use SebastianBergmann\Comparator;

class PhpUnitComparatorLibrary implements AssertionLibrary {
    private Comparator\Factory $factory;

    public function __construct() {
        $this->factory = new Comparator\Factory();
    }

    public function assertEquals(mixed $expected, mixed $actual): void {
        $comparator = $this->factory->getComparatorFor($expected, $actual);
        $comparator->assertEquals($expected, $actual);
    }

    public function assertArrayContains($expected, mixed $actualArray): void {
        $comparator = $this->factory->getComparatorFor($expected, $actualArray);
        $comparator->accepts($expected, $actualArray);
    }
}
