<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name,$color) {
    $this->name = $name;
	$this->color=$color;
  }
  function get_name() {
    return $this->name;
	
  }
  function get_color()
  {
	  return $this->color;
  }
  
  function show()
  {
	  echo "Fruit name is ". $this->name." and color is". $this->color;
  }
  
}

$apple = new Fruit();
//$banana = new Fruit();
$apple->set_name('Apple','Red');
//$banana->set_name('Banana','yellow');
$apple->show();

//echo "Fruit name is ". $apple->get_name()." and color is". $apple->get_color();

echo "<br>";
//echo $banana->get_name();
?>