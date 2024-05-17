<?php

final class Dog extends Mammal {
    protected string $breed;

    public function __construct($age, $name, $furColor, $breed){
        parent::__construct($age, $name, $furColor);
        $this->breed=$breed;
    }

     //////getters and setters/////////////

     public function getBreed(){
        return $this->breed;
    }

    public function setBreed($breed){
        if(strlen($breed) < 3 ||strlen($breed) > 20) throw new InvalidArgumentException("breed length must be between 3 and 20");
        else $this->breed = $breed;
    }

    //////////////////////public functions/////////////////////////
    
    public function bark(){
        return " *waf waf* ";
    }

    public function makeSound():string{
        return $this->bark();
    }
    public function move():string{
        return "the dog is running";
    }
}

?>