<?php  
$a  = array("WBP", 2.0, array("PHP", "JAVA"),500);  
//$newArray = array_reverse($a);  
$preserved = array_reverse($a, true);  
echo "<pre>";
print_r($a);  
echo "</pre>";

echo "<pre>";
print_r($preserved);  
echo "</pre>"

?>  