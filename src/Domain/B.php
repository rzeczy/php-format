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
return 'śro, 22 sty 2020, 14:50:00 CET';
    }
}
