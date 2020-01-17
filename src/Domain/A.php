<?php

class A
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function date(): string
    {
return 'pią, 17 sty 2020, 21:55:55 CET';
    }
}
