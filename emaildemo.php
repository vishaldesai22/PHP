<?php

	$message= "the mail message was sent with the following mail";
	$headers = "from: rohinipatil2@gmail.com";
	mail("rohinipatil2@gmail.com", "testing", $message, $headers);

	echo "test message is sent to mail send successfully....<BR/>";

?>