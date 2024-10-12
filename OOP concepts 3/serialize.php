<?php
$a=array('Welcome','to','php');
$s=serialize($a);
echo "<pre>";
print_r($s);
echo "</pre>";
$s1=unserialize($s);
echo "<br>";
echo "<pre>";
print_r($s1);
echo "</pre>";
?>
