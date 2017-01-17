<?php

class Person {

    const AVG_LIFE_SPAN = 79; // Access with $myObject::<const-name> OR Person::<const-name>

    public $firstName = "Petra"; // Access with $myObject-><const-name>
    public $lastName = "van den Berg";
    public $birthYear = 1990;

    public function getFirstname() {
        return $this->firstName;
    }
    public function setFirstname($tempName) {
        $this->firstName = $tempName;
    }
}

$myObject = new Person();

$myObject->setFirstname("Sammy");

echo $myObject->firstName . " " . $myObject->lastName . "<br>";
echo $myObject::AVG_LIFE_SPAN;