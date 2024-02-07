<?php

//program 3

class base1 {
  public static function getName() {
    return "POLYSGM";
  }
}

class derived extends base1 {
  public $name;
  public function __construct() {
    $this->name = parent::getName();
  }
}

$d1 = new derived;
echo $d1 -> name;
echo base1::getName();
//echo base::getName();


//program 2
/*class greeting {
  public static function welcome() {
    echo "Hello World! welcome";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();*/
//program 1
/*class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();*/
?>