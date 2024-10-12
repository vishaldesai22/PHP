<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['email'];
	$url=$_POST['url'];
	
	
	
	
	
if(empty($name) )
{
echo "Name cant be blank<br>";
}
else if(!is_string($name))
{
	echo "<br>Name should in letters";
}
else
{
	echo "<b>user name is</b>::".$_POST['name']."<br>";
}

if(empty($mobileno))
{
	echo "Mobile no cant be blank<br>";
}
else if(!is_numeric($mobileno))
{
echo "enter valid mobile no<br>";

}
 
else{
	echo "<b>Mobile no is:</b>".$_POST['mobileno']."<br>";
}
}
?>