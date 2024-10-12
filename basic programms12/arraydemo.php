<?php
//Example of indexed array

//associative array 
$age = array("Peter"=>35, "Ben"=>"37", "Joe"=>43.50);//can use different data types
	
echo "<pre>";
print_r($age);
echo "</pre>";

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}


//$age["Joe"]=60;
/*echo "<pre>";
print_r($age);
//var_dump($age);
echo "</pre>";
*/

/*$cars = array("Volvo", "BMW", "Toyota",10,20.55);
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$cars[2]="MJ Hector";


echo "<pre>";

print_r($cars);
echo "</pre>";

for($i=0;$i<=4;$i++)
{
	echo $cars[$i]."<br>";
}*/

?>