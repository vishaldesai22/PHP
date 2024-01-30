<?php

	$color=array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"red","e"=>"black");
	$newArray=array_unique($color);
	//$newArray=array_values($color);
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";
	
	foreach($newArray as $a)
	{
		echo "value :".$a."<br>";
	}
	

?>