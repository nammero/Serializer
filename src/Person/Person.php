<?php
namespace Person;

class Person
{
    public $firstName;
    public $lastName;


    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

}