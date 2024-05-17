<?php 
abstract class Mammal extends Animal {
    protected string $furColor;
    

    public function __construct($age, $name, $furColor){
        parent::__construct($age, $name);
        $this->furColor=$furColor;
    }

     //////getters and setters/////////////

    public function getFurColor(){
        return $this->furColor;
    }

    public function setName($furColor){
        if(strlen($furColor) < 3 ||strlen($furColor) > 20) throw new InvalidArgumentException("furColor length must be between 3 and 20");
        else $this->furColor = $furColor;
    }

    // abstract public function makeSound():string;
    // abstract public function move():string; 
}
?>