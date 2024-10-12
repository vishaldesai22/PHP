<?php
	$emp=[
		[1,"Peter","Manager",4000],
		[2,"John","salesman",2000],
		[3,"Mark","Operator",1000],
		[4,"Joe","Driver",5000]
	];
	
	echo "<pre>";
	print_r($emp);
	echo "</pre>";
	
	echo "<table border='5px'>";
	echo "<tr>
	<th>Sr no</th>
	<th>Name</th>
	<th>Designation</th>
	<th>Salary</th></tr>";
	
	foreach($emp as $v1)
	{
		echo "<tr>";
		foreach($v1 as $v2)
		{
			echo "<td> $v2 </td>";
		}
		echo "</tr>";
		echo "<br>";
	}
	echo "</table>";
	
	
	
	
	/*for($row=0;$row<4;$row++)
	{
		for($col=0;$col<4;$col++)
		{
			echo $emp[$row][$col];
		}
		echo "<br>";
	}*/
	
	
	
?>