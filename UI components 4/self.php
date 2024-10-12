<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email"><br><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
 echo $_POST['name']."<br>";
    echo $_POST['email'];
}
?>
</body>

</html>