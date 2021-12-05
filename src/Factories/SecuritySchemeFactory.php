<?php

namespace Vyuldashev\LaravelOpenApi\Factories;

use GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityScheme;

interface SecuritySchemeFactory
{
    public function build(): SecurityScheme;
}
