<?php

final class Penguin extends Bird {
    protected float $swimSpeed;

    public function __construct($age, $name, $wingSpan, $swimSpeed){
        parent::__construct($age, $name, $wingSpan);
        $this->$swimSpeed=$swimSpeed;
    }

    //////getters and setters/////////////

    public function getSwimSpeed(){
        return $this->swimSpeed;
    }

    public function setSwimSpeed($swimSpeed){
        if($swimSpeed <= 0 ) throw new InvalidArgumentException("swimSpeed cannot be equal or under 0");
        else $this->swimSpeed = $swimSpeed;
    }

    ////////////////public functions/////////////////////
    public function swim(){
        return " *The penguin is swiming* ";
    }

    public function makeSound():string{
        return " *penguin sound* ";
    }
    public function move():string{
        return "the penguin is sliding";
    }
}

?>