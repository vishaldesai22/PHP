<?php

if(mail("rohinipatil2@gmail.com","Test mail","hello this is test mail",
"From: rohinipatil2@gmail"))
{
	echo "mail sent";
}
else
{
	echo "mail not sent";
}
	
?>