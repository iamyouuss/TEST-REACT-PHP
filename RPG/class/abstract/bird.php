<?php 
abstract class Bird extends Animal {
    protected float $wingSpan;
    
    public function __construct($age, $name, $wingSpan){
        parent::__construct($age, $name);
        $this->wingSpan=$wingSpan;
    }

    //////getters and setters/////////////
    public function getWingSpan(){
        return $this->wingSpan;
    }

    public function setWingSpan($wingSpan){
        if($wingSpan <= 0 ) throw new InvalidArgumentException("wingSpan cannot be equal or under 0");
        else $this->wingSpan = $wingSpan;
    }
    // abstract public function makeSound():string;
    // abstract public function move():string; 
}
?>