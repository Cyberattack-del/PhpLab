<?php
$h = 100;
$w = 300;
$i = imagecreate($w, $h);
$bgcolor = imagecolorallocate($i, 0, 0, 0);
imageline($i, 40, 20, 90, 80, $bgcolor);
header('Content-type:image/jpg');
imagejpeg($i);
imagedestroy($i);
?>