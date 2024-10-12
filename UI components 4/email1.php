<?php
// the message
$msg = "this is test mail";
$to="rohinipatil0965@gmail.com";
$sub="test mail";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$from="rohinipatil2@gmail.com";

// send email
if(mail($to,$sub,$msg,$from))
{
	echo "mail send successfully";
}
else
{
	echo "mail failed";
}
?>