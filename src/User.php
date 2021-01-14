<?php
namespace src;

use ArrayObject;
use src\Car;

class User {

    private $name ; 
    private $cin ;
    private $email;
    private $cars ; 
    
    public function __construct( $name , $cin , $email )
    {
        $this->name = $name ; 
        $this->cin = $cin ; 
        $this->email = $email ; 
        $this->cars = new ArrayObject([]);
    }

    public function getName():String
    {
        return $this->name; 
    }

    public function getCin():String
    {
        return $this->cin;
    } 

    public function getEmail():String 
    {
        return $this->email;
    }

    public function setName(string $name):self
    {
        $this->name = $name ;
        return $this ; 
    }


    public function setEmail(string $email):self
    {
        $this->email = $email ;
        return $this ; 
    }

    public function setCin(string $cin):self
    {
        $this->cin = $cin ;
        return $this ; 
    }


    public function addCar(Car $car):self
    {

        $this->cars->append($car);
        return $this; 
    }


    public  static function affiche(string $name)
    {
         echo($name);
    }
}