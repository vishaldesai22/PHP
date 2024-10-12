<?php
	$a1=["a"=>"red","c"=>"green","e"=>"yellow","x"=>"white"];
	$a2=["a"=>"red","c"=>"blue","f"=>"yellow","x"=>"white"];
	//$a3=["b"=>"brown","c"=>"blue","f"=>"yellow","x"=>"white"];
	
	$newArray=array_diff_assoc($a1,$a2);
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";

?>