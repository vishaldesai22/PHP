<?php
//adding text to an image
/*$image = imagecreate(200, 200);
$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
imagefilledrectangle($image, 50, 50, 150, 150, $black);
imagestring($image, 5, 50, 160, "A Black Box", $black);
header("Content-Type: image/png");
imagepng($image);*/



//image rotate
$image = imagecreate(200, 200);
$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
imagefilledrectangle($image, 50, 50, 150, 150, $black);
$rotated = imagerotate($image, 45, 1);
header("Content-Type: image/png");
imagepng($rotated);

//adding text to an image
/*$image = imagecreate(200, 200);
$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
imagefilledrectangle($image, 50, 50, 150, 150, $black);
imagestring($image, 5, 50, 160, "A Black Box", $black);
header("Content-Type: image/png");
imagepng($image);*/




/*$image = imagecreate(200, 200);
$white = imagecolorallocate($image, 255, 0, 0);
$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
imagefilledrectangle($image, 50, 50, 150, 150, $white);
header("Content-Type: image/jpeg");
imagejpeg($image);*/
?>