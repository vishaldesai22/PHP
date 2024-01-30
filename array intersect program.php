<?php
	$a1=["a"=>"red","c"=>"green","e"=>"yellow","x"=>"white"];
	$a2=["a"=>"red","c"=>"blue","f"=>"yellow","x"=>"black"];
	
	$newArray=array_intersect_assoc($a1,$a2);
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";

?>