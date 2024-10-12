<?php
/*$x=31;
if ($x%2==0)
   goto abc;
echo "<h2>x is an odd number</h2>";
return;
abc:
echo "<h2>x is an even number</h2>";*/

for($x=0;$x<10;$x++)
{
	if($x==3)
	{
		goto xyz;
	}
	echo "<h2>Value of x:".$x."<br></h2>";
}
xyz:
echo "<b>This is how to use goto statement";
?>