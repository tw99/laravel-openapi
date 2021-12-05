<?php

namespace Vyuldashev\LaravelOpenApi\Factories;

use GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem;

interface CallbackFactory
{
    public function build(): PathItem;
}
