<?php
$cars=array("Volvo","BMW","Toyota",10,20,55);
echo "I like".$cars[0].",".$cars[1]."and".$cars[2]="MJ Hector";
echo"<pre>";
Print_r($cars);
echo"</pre>";
for($i=0;$i<=4;$i++)
{
	echo $cars[$i]."<br>";
}?>