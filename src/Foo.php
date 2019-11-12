<?php

final class Sample
{
    private $foo;

    public function __construct()
    {
        $this->foo = 'foo content';
    }

    public function foo()
    {
        return $this->foo;
    }
}
