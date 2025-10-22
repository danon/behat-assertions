<?php

use Behat\Behat\Context\Context;
use Behat\Step\Then;
use Behat\Step\When;

class FeatureContext implements Context {
    #[When('a test fails due to unexpected result')]
    public function aTestFailsDueToUnexpectedResult(): void {}

    #[Then('the phpunit assertion returns the difference of values')]
    public function thePhpUnitAssertionReturnsTheDifferenceOfValues(): void {
        \PHPUnit\Framework\Assert::assertSame(['Foo'], ['Bar']);
    }

    #[Then('the webmozart assertion returns the difference of values')]
    public function theWebMozartAssertionReturnsTheDifferenceOfValues(): void {
        \Webmozart\Assert\Assert::same(['Bar'], ['Foo']);
    }

    #[Then('the beberlei assertion returns the difference of values')]
    public function theBeberleiAssertionReturnsTheDifferenceOfValues(): void {
        \Assert\Assertion::same(['Foo'], ['Bar']);
    }
}
