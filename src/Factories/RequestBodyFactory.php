<?php

namespace Vyuldashev\LaravelOpenApi\Factories;

use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use Vyuldashev\LaravelOpenApi\Contracts\Reference;
use Vyuldashev\LaravelOpenApi\RouteInformation;

interface RequestBodyFactory extends Reference
{
    public function build(?RouteInformation $route = null): RequestBody;
}
