<?php
include('connection.php');
if(isset($_POST['save']))
{	 
	 $roll_no = $_POST['roll_no'];
	 $name = $_POST['name'];
	 $address = $_POST['address'];
	// echo "<br>".$_POST['roll_no'];
	 //echo "<br>".$_POST['name'];
	 //echo "<br>".$_POST['address'];
	 $sql = "INSERT INTO STUDENT (roll_no,name,address) VALUES 
			('$roll_no','$name','$address')";
	 if (mysqli_query($conn, $sql)) 
	 {
		echo "<br>New record created successfully !";
	 }
	 else 
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
		
	 }
	
}
?>