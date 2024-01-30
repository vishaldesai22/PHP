<?php
/*$people = array("Peter", "Joe", "Glenn", "Cleveland", 23);

if (in_array(50, $people))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }*/
  
  //array_search function
 /*$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo "<h2>key =".array_search("yellow",$a)."</h2>";*/


//array replace function
$a1=array("a"=>"red","b"=>"green");
$a2=array("a"=>"red","burgundy");
echo "<pre>";
print_r(array_replace_recursive($a1,$a2));
echo "</pre>";

/*$a1=array("red","green");
$a2=array("blue","yellow");
$a3=array("orange","burgundy");
echo "<pre>";
print_r(array_replace($a1,$a2,$a3));
echo "</pre>";*/

  ?>