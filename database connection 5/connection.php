<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname="testdb";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);


// Check connection
if ($conn)
	{
		echo " ";
	}
	else
	{
    echo "Connection failed: " ;
}

?>
