<?php

namespace Inchoo\Sample02\Model;

class Dummy2 extends Dummy
{
    public function __construct($input = 0)
    {
        var_dump("Dummy2::__construct($input)");
    }

    public function show()
    {
        return "test";
    }
}
