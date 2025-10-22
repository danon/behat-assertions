<?php

use Behat\Step\Then;

trait CompareValueObjects {
    #[Then('the phpunit assertion returns the vo and the array')]
    public function thePhpUnitAssertionReturnsTheVoAndTheArray(): void {
        \PHPUnit\Framework\Assert::assertContains(
            new Danon\BehatAssertion\ValueObject('foo'),
            [new Danon\BehatAssertion\ValueObject('foo')]);
    }

    #[Then('the webmozart assertion returns the vo and the array')]
    public function theWebMozartAssertionReturnsTheVoAndTheArray(): void {
        \Webmozart\Assert\Assert::inArray(
            new Danon\BehatAssertion\ValueObject('Foo'),
            [new Danon\BehatAssertion\ValueObject('foo')]);
    }

    #[Then('the beberlei assertion returns the vo and the array')]
    public function theBeberleiAssertionReturnsTheVomAndTheArray(): void {
        \Assert\Assertion::inArray(
            new Danon\BehatAssertion\ValueObject('Foo'),
            [new Danon\BehatAssertion\ValueObject('foo')]);
    }
}
