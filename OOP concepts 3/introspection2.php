<?php

class Rectangle
{
    public $dim1 = 2;
    public $dim2 = 10;
    
 function Rectangle($dim1,$dim2)
 {
  $this->dim1 = $dim1;
  $this->dim2 = $dim2;
 }
 
 function area()
 {
  return $this->dim1*$this->dim2;
 }
 
 function display()
 {
  // any code to display info
 }
}

$S = new Rectangle(4,2);

//get the class varibale i.e properties
$class_properties = get_class_vars("Rectangle");

//get object properties
$object_properties = get_object_vars($S);

//get class methods
$class_methods = get_class_methods("Rectangle");

//get class corresponding to an object
$object_class = get_class($S);

echo "<pre>";
print_r($class_properties);
echo "</pre>";
echo "<pre>";
print_r($object_properties);
echo "</pre>";
echo "<pre>";
print_r($class_methods);
echo "</pre>";
echo "<pre>";
print_r($object_class);
echo "</pre>";
?>