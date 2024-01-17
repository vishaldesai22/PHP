<?php

$dance=array("Pop_style_","Break_style_","Free_style_",23,45,56);

echo "I Like".$dance[0]."Dance,"."<br>".$dance[1]."Dance,"."<br>".$dance[2]."Dance";
echo "<pre>";

print_r($dance);

"</pre>";
for($i=0;$i<=4;$i++)
{
	echo $dance[$i]."<br>";
}

?>