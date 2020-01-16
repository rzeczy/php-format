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
        return 'czw, 16 sty 2020, 20:54:59 CET';
    }
}
