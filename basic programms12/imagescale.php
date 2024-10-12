<?php
$source = imagecreatefromjpeg("msbte.jpg");
$width = imagesx($source);
$height = imagesy($source);
$x = $width /2;
$y = $height /2;
$destination = imagecreatetruecolor($x, $y);
imagecopyresampled($destination, $source, 0, 0, 0, 0, $x, $y, $width, $height);
//imagecopyresized($destination, $source, 0, 0, 0, 0, $x, $y, $width, $height);
header("Content-Type: image/png");
imagepng($destination);
?>