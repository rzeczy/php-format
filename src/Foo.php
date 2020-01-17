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
return 'pią, 17 sty 2020, 23:20:14 CET';
    }
}
