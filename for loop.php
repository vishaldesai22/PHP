<?php

/*for($a=1;$a<=10;$a++)
{
	echo $a.")<h3>Hello world</h3><br>";
}
*/

$sum=0;
for ($x = 10; $x <= 30; $x++) {
  echo "The number is: $x <br>";
  //$sum +=$x;
  $sum=$sum+$x;
}
echo "<h2>Sum of numbers=".$sum."</h2>";
?>