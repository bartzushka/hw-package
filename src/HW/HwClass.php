<?php


namespace HW;


class HwClass
{
    public function __construct()
    {
        echo __CLASS__.' was construct';
    }

    public function run()
    {
        echo "Hello it`s output of run() method from hw package";
    }

}