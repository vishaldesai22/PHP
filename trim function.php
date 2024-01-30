<?php
$str="dHello World";

echo "<h2>"    .$str."  </h2><br>";

//echo "<h2>".trim($str,"H")."</h2>";

//echo "<h2>".trim($str,"dH")."</h2>";
//echo "<h2>".rtrim($str,"dH")."</h2>";

//echo "<h2>".ltrim($str,"dH")."</h2>";

//echo "<h2>".trim($str)."</h2>";

echo "<h2>".chop($str,"d")."</h2>";

?>