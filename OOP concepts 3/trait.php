<?php

trait message1 
{
  public function msg1() 
  {
    echo "OOP is fun! ";
  }
  public function display()
  {
	  echo "<br>this is another function in trait";
  }
}

trait message2 
{
  public function msg2() 
  {
    echo "OOP reduces code duplication!";
  }
}

class first 
{
  use message1;
}

class second
{
  use message1, message2;
}

$obj = new first();
$obj->msg1();
echo "<br>";

$obj2 = new second();
$obj2->msg1();
$obj2->msg2();

$obj2->display();



/*trait message1 
{
public function msg1()
 {
    echo "OOP is fun! ";
  }
}

class Welcome 
{
  use message1;
  public function show()
  {
	  echo "this is in class welcome";
  }
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";
$obj->show();
*/
?>