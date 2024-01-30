<?php
$image = imagecreate(200, 200);
$green = imagecolorallocate($image, 50, 200, 0);
$red = imagecolorallocate($image, 255, 50, 100);
imagestring($image, 1, 10, 10, "Font 1: SGM Poly", $red);
imagestring($image, 2, 10, 30, "Font 2:  SGM Poly", $red);
imagestring($image, 3, 10, 50, "Font 3:  SGM Poly", $red);
imagestring($image, 4, 10, 70, "Font 4:  SGM Poly", $red);
imagestring($image, 5, 10, 90, "Font 5:  SGM Poly", $red);
header("Content-Type: image/png");
imagepng($image);


?>