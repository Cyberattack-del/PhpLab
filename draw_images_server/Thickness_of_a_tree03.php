<?php
$h = 100;
$w = 300;
$i = imagecreate($w, $h);
imagesetthickness($i, 6);
$bgcolor = imagecolorallocate($i, 200, 200, 200);
$bkcolor = imagecolorallocate($i, 0, 0, 0);
header('Content-Type:image/jpg');
imagejpeg($i);
imagedestroy($i);
?>