<?php
	$colors=["red","green","blue","brown","black"];
	$newArray=array_slice($colors,-2,2,true);
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";

?>