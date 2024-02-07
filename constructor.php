<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name="0",$c="0") {
    $this->name = $name;
	$this->color = $c;
  }
 /* function get_name() {
    return $this->name;
  }*/
  function get_name() {
	  echo "Fruit name is ". $this->name." and color is ". $this->color;
  }
}

//$apple = new Fruit("apple","green");
$sample = new Fruit("strawberry","red");
//echo "<h3>Name of fruit: ". $apple->get_name();
//echo  $apple->get_name();
echo  $sample->get_name();
?>