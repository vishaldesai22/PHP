<?php
class address{
   public $city="Mumbai";
   public $pin="400001";
   function setaddr($arg1, $arg2){
      $this->city=$arg1;
      $this->pin=$arg2;
   }
}
class myclass{
   public $name="Raja";
   public $obj;
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
echo "<pre>";
print_r($obj1);
echo "</pre>";

$obj2=clone $obj1;
$obj1->setname("Ravi");
$obj1->obj->setaddr("Gadhinglaj", "416502");
echo "after change:\n";
echo "original object:\n";
echo "<pre>";
print_r($obj1);
echo "</pre>";

echo "cloned object:\n";
echo "<pre>";
print_r($obj2);
echo "</pre>";
?>