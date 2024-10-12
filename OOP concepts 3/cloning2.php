<?php
class Animals
{
public $name;
public $category;
}
//Creating instance of Animals class
$objAnimals = new Animals();
//Assigning values
$objAnimals->name = "Lion";
$objAnimals->category = "Wild Animal";
//Cloning the original object
$objCloned = clone $objAnimals;
$objCloned->name = "Elephant";
$objCloned->category = "Wild Animal";
echo "<pre>";
print_r($objAnimals);
echo "</pre>";
echo "<pre>";
print_r($objCloned);
echo "</pre>";
?>
