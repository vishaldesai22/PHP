<?php
 $fruit=array('apple','banana','grapes','orange');
 
 echo "Current value:".current($fruit)."<br>";
 echo "current key:".key($fruit)."<br>";
 echo "<b>Position:".pos($fruit);
 next($fruit);
 echo "<b><br>Current value:".current($fruit)."<br>";
 echo "<b>current key:".key($fruit)."<br>";
 
 prev($fruit);
 echo "<b><br>Current value:".current($fruit)."<br>";
 echo "<b>current key:".key($fruit)."<br>";
 
 end($fruit);
 echo "<b><br>Current value:".current($fruit)."<br>";
 echo "<b>current key:".key($fruit)."<br>";
 echo "<pre>";
 print_r(each($fruit));
 echo "</pre>";
 
 reset($fruit);
 echo "<b><br>Current value:".current($fruit)."<br>";
 echo "<b>current key:".key($fruit)."<br>";
 
 
?>