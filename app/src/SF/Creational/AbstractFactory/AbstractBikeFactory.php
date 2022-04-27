<?php

namespace SF\Creational\AbstractFactory;

class AbstractBikeFactory
{
    public function __construct()
    {
        print_r("Bike Constructor called");
        print_r("<br>");
    }

    public function createBlueBike()
    {
        return "blue";
    }
}
