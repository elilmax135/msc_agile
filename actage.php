<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function ageinMon(){
        return $this->age*12;
    }
    public function ageinweek(){
        return $this->age*12*4;
    }
}


echo "Enter your name: ";
$name = readline();

echo "Enter your age: ";
$age = (int) readline();


$person = new Person($name, $age);

echo "You entered: Name - " . $person->getName() . ", Age - " . $person->getAge() .", Agein month - " . $person->ageinMon($age).", Agein week - " . $person->ageinweek($age);
?>
