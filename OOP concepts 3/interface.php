<?php 
  
interface MyInterface{
  
    public function method1();
    public function method2();
  
}
interface second
{
	
	public function method3();
}
  
class MyClass implements MyInterface,second{
  
    public function method1(){
        echo "From interface first Method1 Called" . "\n";
    }
  
    public function method2(){
        echo "<br>From interface firt Method2 Called". "\n";
    }
	 public function method3(){
        echo "<br>From interface second Method3 Called". "\n";
    }
	
} 
  
$obj = new MyClass;
$obj->method1();
$obj->method2();
$obj->method3();
  
?>