<?php

declare(strict_types=1);

namespace Albert221\Validation\Preset;

use Albert221\Validation\Validator;

abstract class Preset
{
    /**
     * @return Validator
     */
    abstract public function getValidatorBuilder(): Validator;
}
