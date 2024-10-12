<?php
/*$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}*/
// using conditional statement in switch case
$age=4;
switch(true)
{
	case ($age>0 && $age<=18):
		echo "<b>You are not eligible for voting";
		break;
		
	case ($age>18 && $age<=100):
	echo "<b>You are eligible for voting";
	break;
	
	default:
		echo "<b>Please enter correct age";
		
	
}
?>