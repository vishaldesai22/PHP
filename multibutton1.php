<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{
	$n1=$_POST["number1"];
	$n2=$_POST["number2"];
	
if (isset($_POST['add']))
{
    echo ($n1 + $n2); 
}
	else if(isset($_POST['subtract']))
	{
    echo ($n1 - $n2); 
	}
	else{
		 echo ($n1 * $n2); 
	}
}
?>