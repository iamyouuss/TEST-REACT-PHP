<?php

class Eagle extends Bird {
    protected float $flightSpeed;

    public function __construct($age, $name, $wingSpan, $flightSpeed){
        parent::__construct($age, $name, $wingSpan);
        $this->$flightSpeed=$flightSpeed;
    }

     //////getters and setters/////////////

     public function getFlightSpeed(){
        return $this->flightSpeed;
    }

    public function setFlightSpeed($flightSpeed){
        if($flightSpeed <= 0 ) throw new InvalidArgumentException("flightSpeed cannot be equal or under 0");
        else $this->flightSpeed = $flightSpeed;
    }

    ////////////////public functions/////////////////////
    public function hunt(){
        return " *The eagle is hunting* ";
    }

    public function makeSound():string{
        return " *eagle sound* ";
    }
    public function move():string{
        return "the eagle is flying";
    }
}

?>