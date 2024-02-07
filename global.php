<?php
$x = 300;
$y = 200;
  Function  multiplication(){
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
  multiplication();
echo $z;
?>
