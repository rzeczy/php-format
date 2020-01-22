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
return 'śro, 22 sty 2020, 14:51:14 CET';
    }
}
