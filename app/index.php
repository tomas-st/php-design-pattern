<?php

require 'vendor/autoload.php';

// print_r("Singleton");
// print_r("<br />");
// $instance = SF\Creational\Singleton\DB::getInstance();
// $instance = SF\Creational\Singleton\DB::getInstance();
// print_r("Singleton finished");
// print_r("<br />");
// print_r("<br />");

print_r("Abstract Factory start");
print_r("<br />");
$i2  = new SF\Creational\AbstractFactory\AbstractCarFactory();
$i2  = new SF\Creational\AbstractFactory\AbstractBikeFactory();
print_r("Abstract Factory finished");
print_r("<br />");
print_r("<br />");

// print_r("Facade start");
// print_r("<br />");
// $i2  = new SF\Structural\Facade\Access();
// $i2  = new SF\Structural\Facade\Access();
// print_r("Facade finished");
// print_r("<br />");
// print_r("<br />");
