<?php

use Behat\Step\Then;

trait Contains {
    #[Then('the phpunit assertion returns the item and the array')]
    public function thePhpUnitAssertionReturnsTheItemAndTheArray(): void {
        \PHPUnit\Framework\Assert::assertContains(
            'foo',
            ['foo1', 'foo2']);
    }

    #[Then('the webmozart assertion returns the item and the array')]
    public function theWebMozartAssertionReturnsTheItemAndTheArray(): void {
        \Webmozart\Assert\Assert::inArray(
            'foo',
            ['foo1', 'foo2']);
    }

    #[Then('the beberlei assertion returns the item and the array')]
    public function theBeberleiAssertionReturnsTheItemAndTheArray(): void {
        \Assert\Assertion::inArray(
            'foo',
            ['foo1', 'foo2']);
    }
}
