<?php  
   /* $ele = array("Ryan", "Ahana", "Ritvik", "Amaya");  
    $no_of_ele = count($ele);  
    echo "<h2>Number of elements present in the array: ".$no_of_ele."</h2>"; */ 
	
	/*$ele = array(14, 89, 26, 90, 36, 48, 67, 75);  
    $no_of_ele = sizeof($ele);  
    echo " Number of elements present in the array: ".$no_of_ele;  */

	//Associative array
	 $snacks = array('drinks' => array('cold coffee', 'traffic jam', 'Espresso','Americano'),
				'bevrage' => array('spring rolls', 'nuddles'));  
	
	echo "<br> Number of elements present in the".count($snacks);
	 echo "</br>";  
   echo "<br>no of elements in drinks: ".count($snacks['drinks'], 1);  //return particular count 
    echo "</br>";  
    echo "Size of snacks: ".sizeof($snacks, 1); 
?>  