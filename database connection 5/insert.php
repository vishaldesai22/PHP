<?php
//simple insert operation
$conn=mysqli_connect("localhost","root","","student");



$query="INSERT INTO tyco (name,address,gender,mobile) VALUES
		('Avdhoot','Gad','male','1234'),('Devakka','Bhadgaon','Female','1234')";
	
	if(mysqli_query($conn,$query))
	{
		echo "Record added successfully";
	}
	else{
		echo "Failed to add record";
	}

?>