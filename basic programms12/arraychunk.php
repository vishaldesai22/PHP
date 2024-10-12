<?php
	/*$array=array(
			array(
				'id'=>10,
				'first_name'=>"Ram",
				'last_name'=>"Patil"),
			array(
				'id'=>20,
				'first_name'=>"Laxman",
				'last_name'=>"Mehata"),
			array(
				'id'=>30,
				'first_name'=>"Krishna",
				'last_name'=>"Yadav")
				);
				
		$newArray=array_column($array,'first_name');
		
		echo "<pre>";
		print_r($newArray);
		echo "</pre>";*/
				
	$cars=["volvo","BMW","Totota","Honda","Suzuki"];
	
	$newArray=array_chunk($cars,3);
	
	echo "<pre>";
		print_r($newArray);
		echo "</pre>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


?>