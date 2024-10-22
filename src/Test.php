<?php

namespace // empty namespace means global
{
}

class Test
{
    protected const PHP_VERSION = 5;

    protected function phpVersion()
    {
        return self::PHP_VERSION;
    }
}
