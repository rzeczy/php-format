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
        return 'czw, 16 sty 2020, 21:19:19 CET';
    }
}
