<?php
namespace src ; 

class Car{
    private $color; 
    private $marke;
    private $nbrplaces; 


    public function getColor():String
    {
        return $this->color; 
    }

    public function getMarke():String
    {
        return $this->marke; 
    }

    public function getNbrplaces():String
    {
        return $this->nbrplaces; 
    }

    public function setColor( $color )
    {
         $this->color= $color;
    } 
    public function setMarke($marke)
    {
        $this->marke = $marke;
    } 
    public function setNbrplaces($nbrplaces)
    {
         $this->nbrplaces= $nbrplaces;
    } 



}