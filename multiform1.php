<html>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(!empty($_POST['mailsubmit']))
{
echo "your mail is:".$_POST['email'];
}
}
?>
</body>
</html>


