<?php


class A
{
	protected $name;
	protected function show($name)
	{
		echo "Hello ".$this->name;
	}
}
class B extends A
{
	public function get()
	{
		echo "<br> " .$this->show("SGM Poly");
		echo "Name is ".$this->name;
	}
}
//$obj1=new A();
$obj1=new B();

//$obj1->name="SGM POLY";
//$obj1->show();
$obj1->get();

?>