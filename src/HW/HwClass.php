<?php


namespace Hw;


class HwClass
{
    public function __construct()
    {
        echo __CLASS__.' was construct'.PHP_EOL;
    }

    public function run()
    {
        echo "Hello it`s output of run() method from ".__CLASS__.PHP_EOL;
    }

}