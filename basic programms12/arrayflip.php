<?php
	$a=array("Bill"=>20,"Joe"=>30,"Peter"=>40);
	//$newArray=array_flip($a);
	$newArray=array_change_key_case($a,CASE_LOWER);
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";
	
	foreach($newArray as $key=>$val)
	{
		echo "<h3>Key=".$key." and value= ".$val."<br></h3>";
	}


?>