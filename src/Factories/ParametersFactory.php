<?php

namespace Vyuldashev\LaravelOpenApi\Factories;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use Vyuldashev\LaravelOpenApi\Contracts\Reference;

interface ParametersFactory extends Reference
{
    /**
     * @return Parameter[]
     */
    public function build(): array;
}
