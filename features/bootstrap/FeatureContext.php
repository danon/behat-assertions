<?php

use Behat\Behat\Context\Context;
use Behat\Step\Then;
use Behat\Step\When;
use Danon\BehatAssertion\Library\AssertionLibrary;
use Danon\BehatAssertion\Library\OuzoGoodiesAssertionLibrary;
use Danon\BehatAssertion\ValueObject;

class FeatureContext implements Context {
    private AssertionLibrary $assert;

    public function __construct() {
//        $this->assert = new PhpUnitAssertionLibrary();
//        $this->assert = new WebmozartAssertionLibrary();
//        $this->assert = new BeberleiAssertionLibrary();
        $this->assert = new OuzoGoodiesAssertionLibrary();
    }

    #[When('a test fails due to unexpected result')]
    public function aTestFailsDueToUnexpectedResult(): void {}

    #[Then('the assertion returns the difference the expected and the actual')]
    public function theAssertionReturnsTheDifferenceTheExpectedAndTheActual(): void {
        $this->assert->assertEquals(['bar'], ['foo']);
    }

    #[Then('the assertion returns the item and the array')]
    public function theAssertionReturnsTheItemAndTheArray(): void {
        $this->assert->assertArrayContains('foo', ['foo1', 'foo2']);
    }

    #[Then('the assertion compares the value object and the array')]
    public function theAssertionComparesTheValueObjectAndTheArray(): void {
        $this->assert->assertArrayContains(
            new ValueObject('foo'),
            [new ValueObject('foo')]);
    }
}
