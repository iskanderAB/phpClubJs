<?php

use src\Car;
use src\User ;
require('src/User.php');
require('src/Car.php');

$user = new User("iskander" , "113*****","iskander@gmail.com");
$car = new Car();
$car->setColor('red');
$car->setMarke("isuzu");
$car->setNbrplaces(5);
$user->addCar($car);

// $user->setName("ghada")
//       ->setEmail("ghada@gmail.com")
//       ->setCin("113*****"); 

var_dump($user);
