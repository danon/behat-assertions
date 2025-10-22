<?php

namespace Danon\BehatAssertion;

readonly class ValueObject {
    public function __construct(
        public string $value,
    ) {}
}
