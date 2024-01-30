<?php
$str="Hello world.Have world a nice day";

//echo "<h3>Length= ".strlen($str)."</h3>";
//echo "<h3>No of words= ".str_word_count($str)."</h3>";
echo substr_count($str,"world",12,15);


?>