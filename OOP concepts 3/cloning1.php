<?php
class Animals
{
public $name;
public $category;
}
//Creating instance of Animals class
$objAnimals = new Animals();
//setting properties
$objAnimals->name = "Lion";
$objAnimals->category = "Wild Animal";
//Copying object
$objCopied = $objAnimals;

$objCopied->name = "Cat";
$objCopied->category = "Pet Animal";
echo "first object <br>";
echo "<pre>";
print_r($objAnimals);
echo "</pre>";
echo "second object <br>";
echo "<pre>";
print_r($objCopied);
echo "</pre>";
?>
