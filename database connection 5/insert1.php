<?php 
//include("connection.php");
$conn=mysqli_connect("localhost","root","","student");
if($conn)
{
	echo "sucessful";
}
else
{
	echo "failed";
}
	
$query="INSERT INTO SYCO(name,address,mobile,gender) VALUES('rani','GAD','123','female')";
if(mysqli_query($conn,$query))
{
	echo "sucessful";
}
else
{
	echo "failed";
}
?>