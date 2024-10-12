<?php
$conn=mysqli_connect("localhost","root","","student");
if($conn==false)
{
	die("Error: Could not connect".mysqli_connect_error());
}
$sql="SELECT * FROM tyco WHERE gender='male'";

if($result=mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo "<br>";
			echo "  ". $row['id'];
			echo "  ".$row['name'];
			echo "  ".$row['address'];
			echo "  ".$row['gender'];
			echo "  ".$row['mobile'];
		}
	}
	else{
		echo "record not available";
	}
	
}
else
{
	echo "cant display";
}

?>