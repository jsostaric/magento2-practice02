<?php

namespace Inchoo\Sample02\Model;

class Dummy implements DummyInterface
{
    public function __construct($input)
    {
        var_dump("Dummy::__construct($input)");
    }

}
