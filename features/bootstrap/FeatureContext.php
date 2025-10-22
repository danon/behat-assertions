<?php

use Behat\Behat\Context\Context;
use Behat\Step\When;

class FeatureContext implements Context {
    use Equals;
    use Contains;
    use CompareValueObjects;

    #[When('a test fails due to unexpected result')]
    public function aTestFailsDueToUnexpectedResult(): void {}
}
