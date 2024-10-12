<?php

class sample
{
	public $num1;
	public $num2;
	public $num3;
	
	public function sum($num1,$num2)
	{
		return $num1+$num2;
	}
	
	public function sum($num1,$num2,$num3)
	{
		return $num1+$num2+$num3;
	}
}

$s1=new sample();
echo $s1->sum(10,20);

?>