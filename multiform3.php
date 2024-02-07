<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(!empty($_POST['mobilesubmit']))
{
echo "your mobile is:".$_POST['mobile'];
}
else 
{
echo "your email is:".$_POST['email'];
}
}

?>