<?php
	//$food=array("pizza","cold drink","apple","mango","lassi");
	$food=array("a"=>"pizza","z"=>"cold drink","s"=>"apple","c"=>"mango","k"=>"lassi");

	krsort($food);
	
	echo "<pre>";
	print_r($food);
	echo "</pre>";
?>