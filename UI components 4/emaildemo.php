<?php

	$message= "the mail message was sent with the following mail";
	$headers = "from: rohinipatil2@gmail.com";
	if(mail("rohinipatil2@gmail.com", "testing", $message, $headers))
	{
	echo "mail send successfully....<BR/>";
	}
	else
	{
		echo "email not sent!!";
	}

?>