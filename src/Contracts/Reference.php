<?php

namespace Vyuldashev\LaravelOpenApi\Contracts;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

interface Reference
{
    public static function ref(?string $objectId = null): Schema;
}
