<?php
class Person
{
 private $firstName;
 
 public function __get($propertyName)
 {
 echo "attempted to read non-existing property: $propertyName ";
 } 
 public function __set($propertyNane, $propertyValue)
 {
 echo "attempted to write to non-existing property: $propertyNane ";
 } 
 
}
 
$p = new Person();
 
$p->firstName = 'Doe';
echo $p->firstName;
 
$p->lastName = 'John';
echo $p->lastName;
?>