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
        return 'czw, 16 sty 2020, 21:04:31 CET';
    }
}
