<?php

namespace Vyuldashev\LaravelOpenApi\Factories;

interface ExtensionFactory
{
    public function key(): string;

    /**
     * @return string|null|array
     */
    public function value();
}
