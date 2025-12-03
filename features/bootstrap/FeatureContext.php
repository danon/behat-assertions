<?php

use Behat\Behat\Context\Context;
use Behat\Step\Then;
use Behat\Step\When;
use Danon\BehatAssertion\Library\AssertionLibrary;
use Danon\BehatAssertion\Library\BeberleiAssertionLibrary;
use Danon\BehatAssertion\Library\OuzoGoodiesAssertionLibrary;
use Danon\BehatAssertion\Library\PhpUnitAssertionLibrary;
use Danon\BehatAssertion\Library\PhpUnitComparatorLibrary;
use Danon\BehatAssertion\Library\WebmozartAssertionLibrary;
use Danon\BehatAssertion\Library\ZenstruckAssertionLibrary;
use Danon\BehatAssertion\ValueObject;

class FeatureContext implements Context {
    private AssertionLibrary $assert;

    public function __construct() {
        $this->assert = $this->assertionLibrary();
    }

    private function assertionLibrary(): AssertionLibrary {
        return match (\getEnv('BEHAT_ASSERTION_LIBRARY')) {
            'phpunit'            => new PhpUnitAssertionLibrary(),
            'webmozart'          => new WebmozartAssertionLibrary(),
            'beberlei'           => new BeberleiAssertionLibrary(),
            'ouzo'               => new OuzoGoodiesAssertionLibrary(),
            'phpunit-comparator' => new PhpUnitComparatorLibrary(),
            'zenstruck'          => new ZenstruckAssertionLibrary(),
            default              => new ZenstruckAssertionLibrary(),
        };
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

    #[Then('the assertion compares deeply and strictly')]
    public function theAssertionComparesDeeplyAndStrictly(): void {
        $this->assert->assertEquals(
            new ValueObject('12'),
            [new ValueObject(12)]);
    }
}
