<?php 
$to="rohinipatil2@gmail.com";
$sub="this is test mail";
$msg="This is sample email sending program";
$header="From:rohinipatil0965@gmail.com";
$retvalue=mail($to,$sub,$msg,$header);
if($retvalue==true)
{
echo "message sent successfully...";
}
else
{
echo "message could not sent ";
}
?>