<?php

namespace App;

final class Foo
{
    private string $foo;

    public function __construct()
    {
        $this->foo = 'foo content';
    }

    public function foo(): string
    {
        return $this->foo;
    }

    public function date(): string
    {
        return 'czw, 16 sty 2020, 21:04:37 CET';
    }
}
