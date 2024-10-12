<?php 
 $marks=[
	"Krishna"=>["Physichs"=>40,"maths"=>60,"chemistry"=>70],
	"Salman"=>["Physichs"=>50,"maths"=>65,"chemistry"=>80],
	"Mohan"=>["Physichs"=>50,"maths"=>65,"chemistry"=>80]
	
 ];
echo "<table border='2px' cellspacing='2px' cellpadding='5px'>
	<tr>
	<th>Student Name</th>
	<th>Physics</th>
	<th>Maths</th>
	<th>Chemistry</th>
	
	</tr>";

foreach($marks as $key => $v1)
{
	
	echo "<tr>";
	echo "<td>".$key."</td> ";
	foreach($v1 as  $v2)
	{
	echo "<td>".$v2." </td> ";
	}
	echo "<br>";
	echo "</tr>";
}
echo "</table>";
echo "<pre>";
print_r($marks);
echo "</pre>";
?>