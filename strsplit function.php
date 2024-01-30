<?php

$str="Sgmrp Mahagaon";

	echo "<h2>".$str."<br></h2>";
	//$array=str_split($str,4);
	
	/*echo "<pre>";
	echo print_r($array);
	echo "</pre>";*/
	
	
	$newStr=chunk_split($str,1," ");
	
	echo "<h2>".$newStr."<br></h2>";

?>