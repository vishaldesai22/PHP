<?php

	/*function factorial($num)
	{

		$fact=1;
		for($a=1;$a<=$num;$a++)
		{
			$fact=$fact*$a;
			
		}
		return $fact;
	}
	$no=6;
	 $result=factorial($no);
	 echo "<h3>Factorial of number ".$no."=".$result."</h3>";*/
	 
	 function digit($num)
	 {
		 $add=0;
		 for($a=0;$a<strlen($num);$a++)
		 {
			 $add=$add+$num[$a];
		 }
		 
		 return $add;
		 
	 }
	 
	 $no="555";
	 
	 echo "Sum of digits = ".digit($no);
	
	
	
	

?>
