<?php
require_once 'Person/Person.php';
require_once 'Serializer/Serializer.php';
use Person\Person;
use Serializer\Serializer;

$person = new Person('Ivan', 'Kovalov');
$serializer = new Serializer();
$serializedPerson = $serializer->toJSON($person);
//$serializedPerson = $serializer->toYAML($person);

print_r($serializedPerson);

