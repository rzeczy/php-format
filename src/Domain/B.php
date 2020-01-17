<?php

final class B
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function date(): string
    {
return 'pią, 17 sty 2020, 21:10:59 CET';
    }
}
