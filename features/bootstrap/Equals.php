<?php

use Behat\Step\Then;

trait Equals {
    #[Then('the phpunit assertion returns the difference of values')]
    public function thePhpUnitAssertionReturnsTheDifferenceOfValues(): void {
        \PHPUnit\Framework\Assert::assertSame(['expected'], ['actual']);
    }

    #[Then('the webmozart assertion returns the difference of values')]
    public function theWebMozartAssertionReturnsTheDifferenceOfValues(): void {
        \Webmozart\Assert\Assert::same(['actual'], ['expected']);
    }

    #[Then('the beberlei assertion returns the difference of values')]
    public function theBeberleiAssertionReturnsTheDifferenceOfValues(): void {
        \Assert\Assertion::same(['expected'], ['actual']);
    }
}
