<?php

require 'vendor/autoload.php';

// print_r("Singleton");
// print_r("<br />");
// $instance = MyApp\Creational\Singleton\DB::getInstance();
// $instance = MyApp\Creational\Singleton\DB::getInstance();
// print_r("Singleton finished");
// print_r("<br />");
// print_r("<br />");

print_r("Abstract Factory start");
print_r("<br />");
$i2  = new MyApp\Creational\AbstractFactory\AbstractCarFactory();
$i2  = new MyApp\Creational\AbstractFactory\AbstractBikeFactory();
print_r("Abstract Factory finished");
print_r("<br />");
print_r("<br />");

// print_r("Facade start");
// print_r("<br />");
// $i2  = new MyApp\Structural\Facade\Access();
// $i2  = new MyApp\Structural\Facade\Access();
// print_r("Facade finished");
// print_r("<br />");
// print_r("<br />");
