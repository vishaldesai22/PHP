<?php

   $image = imagecreate(300,200);
  $colorWhite = imagecolorallocate($image, 255, 255, 255);
  imagefill($image, 0, 0, $colorWhite);

  $colorBlack = imagecolorallocate($image, 0, 0, 0);

  imageLine($image, 50, 20, 200, 150, $colorBlack);

  $pointsTriangle = array(50, 10, 10, 90, 90, 90,120,70);
  imagePolygon($image, $pointsTriangle, count($pointsTriangle)/2, $colorBlack);

  header("Content-type: image/png");
  imagepng($image);
  
  
  
  
  
  
  
  
  
  
  
  /*	$image = imagecreate(400,400);
  $colorWhite = imagecolorallocate($image, 255, 255, 255);
  imagefill($image, 0, 0, $colorWhite);

  imagefilledrectangle($image, 50,50, 150, 125,imagecolorallocate($image,255,0,0));
  imageellipse($image, 150, 200, 100, 100,imagecolorallocate($image,0,0,255));
  imagestring($image, 5, 10, 10, "Hello!",imagecolorallocate($image,0,0,0));

  header("Content-type: image/png");
  imagepng($image);*/

  ?>
