<?php
class a
{
protected function function_a(){
echo "<BR>from base class A";
}
}

class b extends a
{
public function function_b(){
	echo "<br> " .$this->function_a();
echo "<br>from first derived class B";
}
}

class c extends a
{
public function function_c(){
echo "<br>from second derived class B";
}
}
$derived=new b();
//$derived->function_a();
$derived->function_b();
$derived1=new c();
//$derived1->function_a();
$derived1->function_c();

?>