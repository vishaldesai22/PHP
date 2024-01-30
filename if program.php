<?php
$per=110;

if($per>75 && $per<=100)
{

	echo "<h2>Distiction</h2>";
}
elseif($per>=60 && $per<75)
{
	echo "<h2>First Class</h2>";
}
elseif($per>=50 && $per<60)
{
	echo "<h2>Second Class</h2>";
}

elseif($per>=40 && $per<50)
{
	echo "<h2>Third  Class</h2>";
}
elseif($per>=0 && $per<40)
{
	echo "<h2>Fail</h2>";
}
else
{
	echo "<h2>Please enter valid percentage</h2>";
}
//echo "<h3>enter valid amount</h3>";
?>