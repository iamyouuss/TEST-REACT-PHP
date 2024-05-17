<?php 
 class Elephant extends Mammal {
    protected float $tuskLength;
    

    public function __construct($age, $name, $furColor, $tuskLength){
        parent::__construct($age, $name, $furColor);
        $this->tuskLength=$tuskLength;
    }

    //////getters and setters/////////////

     public function getTuskLength(){
        return $this->tuskLength;
    }

    public function setTuskLength($tuskLength){
        if($tuskLength <= 0 ) throw new InvalidArgumentException("tuskLength cannot be equal or under 0");
        else $this->tuskLength = $tuskLength;
    }

    ////////////////public functions/////////////////////
    public function trumpet(){
        return " *trumpet sound* ";
    }

    public function makeSound():string{
        return $this->trumpet();
    }
    public function move():string{
        return "the Elephant is walking";
    }
}
?>