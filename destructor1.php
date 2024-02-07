<?php

class abc
{
	public function __construct()
	{
		echo "Hello I am in contrsctor fucntion<br>";
	}
	public function show()
	{
		echo "<br>I am in normal method";
		
	}
	
	public function __destruct()
	{
		echo "<br> I am in destrcutor function";
	}
	
}

$test=new abc();
//$test->show();

?>