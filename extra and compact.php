<?php
	$name="SGMRP";
	$dept="Cmputer";
	$sub="PHP";
	$semester="5";
	$board="MSBTE";
	$extra=array("semester","board");
	$newArray=compact("name","dept","sub",$extra);
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";
		
	
















	/*$co="department";
	$dept=array("co"=>"Computer","me"=>"Mechanical","ce"=>"Civil");

	
	extract($dept);
	echo "value of Co=".$co."<br>";
	echo "value of me=".$test_me."<br>";
	echo "value of Ce=".$test_ce;*/
	
	

?>