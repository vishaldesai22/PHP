<?php
$cookie_name = "class";
$cookie_value = "third year computer engineering";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "<h2>Cookie named '" . $cookie_name . "' is not set!</h2>";
} else {
     echo "<h2>Cookie '" . $cookie_name . "' is set!<h2><br>";
     echo "<h2>Value is: " . $_COOKIE[$cookie_name]."</h2>";
	// echo "<h2>Value is: " . $cookie_value."</h2>";
}
?>

</body>
</html>