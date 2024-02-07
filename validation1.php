<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	
if(empty($_POST['name']))
{
echo "Name cant be blank<br>";
}

else
{
	echo "<b>user name is</b>::".$_POST['name']."<br>";
}

if(!is_numeric($_POST['mobileno']))
{
echo "enter valid mobile no<br>";

}
else{
	echo "<b>Mobile no is:</b>".$_POST['mobileno']."<br>";
}
/*$pattern='/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/';
if(!preg_match($pattern,$_POST['email']))
{
echo "enter valid email id.<br>";
}
else
{
	echo "<b>your email is::</b> ".$_POST['email']."<br>";
}*/
$email1=$_POST['email'];
if(FILTER_VAR($email1,FILTER_VALIDATE_EMAIL))
{
	echo "<b>your email is::</b> ".$email1."<br>";
}
else{
	echo "enter valid email";
}

}
?>