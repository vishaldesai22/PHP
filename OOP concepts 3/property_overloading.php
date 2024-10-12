<?php
class Toys
{
	
	public $name;
private $str;
public function __set($name,$value){
$this->str[$name] = $value;
}
public function __get($name){
echo "Overloaded Property name = " . $this->str[$name] . "<br/>";
}
public function __isset($name){
if(isset($this->str[$name])){
echo "Property \$$name is set.<br/>";		
} else {
echo "Property \$$name is not set.<br/>";
}
}
public function __unset($name){
unset($this->str[$name]);
echo "\$$name is unset <br/>";
}
}

$toy1=new Toys;
$toy1->animal="cat";//set method invoked
//echo $toy1->animal."\n";//get method invoked
isset($toy1->animal);//isset method invoked
unset($toy1->animal);//unset method invoked
isset($toy1->animal);//isset method invoked

?>
