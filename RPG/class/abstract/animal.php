<?php 
abstract class Animal {
    protected string $name;
    protected int $age; 

    public function __construct($age, $name){
        $this->age=$age;
        $this->name=$name;
    }

    //////getters and setters/////////////

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setName($name){
        if(strlen($name) < 3 ||strlen($name) > 20) throw new InvalidArgumentException("name length must be between 3 and 20");
        else $this->name = $name;
    }

    public function setAge($age){
        if($age <= 0) throw new InvalidArgumentException("age cannot be under or equel to 0");
        $this->age = $age;
    }


    abstract public function makeSound():string;
    abstract public function move():string; 
}
?>