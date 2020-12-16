<?php


namespace Inchoo\Sample02\Model;


class B
{
    protected $a;

    public function __construct(A $a)
    {
        $this->a = $a;
        var_dump("B::__construct()");
    }
}
