<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
	echo "<br> from destructor function";
  }
}

$apple = new Fruit("Apple");
?>