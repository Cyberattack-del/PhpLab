<?php
header('Content-type: image/png');
$c = imagecreate(500, 500);
$bc = imagecolorallocate($c, 200, 100, 100); 
$fc = imagecolorallocate($c, 225, 225, 150);
$lc = imagecolorallocate($c, 20, 20, 20);   
imagefilledellipse($c, 250, 250, 400, 400, $fc);
imagefilledellipse($c, 150, 150, 50, 50, $lc);
imagefilledellipse($c, 350, 150, 50, 50, $lc);
imageline($c, 250, 200, 250, 275, $lc);
imagearc($c, 250, 300, 250, 150, 0, 180, $lc);
imagepng($c);
imagedestroy($c);
?>