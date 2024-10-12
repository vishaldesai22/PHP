<?php
class address{
   var $city="Nanded";
   var $pin="431601";
   function setaddr($arg1, $arg2){
      $this->city=$arg1;
      $this->pin=$arg2;
   }
}
class myclass{
   var $name="Raja";
   var $obj;
   function setname($arg){
      $this->name=$arg;
   }
   public function __clone() {
      $this->obj = clone $this->obj ;
   }
}
$obj1=new myclass();
$obj1->obj=new address();
echo "original object:\n";
print_r($obj1);
$obj2=clone $obj1;
$obj1->setname("Ravi");
$obj1->obj->setaddr("Mumbai", "400001");
echo "after change:\n";
echo "original object:\n";
print_r($obj1);
echo "cloned object:\n";
print_r($obj2);
?>