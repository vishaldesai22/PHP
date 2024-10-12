<?php

$str1="hELLO world! good Morning.";

echo $str1."<br>";
/*$newStr=strtolower($str1);
echo $newStr;*/

/*$newStr=strtoupper($str1);
echo $newStr;*/

/*$newStr=lcfirst($str1);
echo $newStr;*/

/*$newStr=ucfirst($str1);
echo $newStr;*/
$newStr=ucwords($str1);
echo $newStr;

?>

