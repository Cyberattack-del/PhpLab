<?php

$h = 100;  // Height of the image
$w = 300;  // Width of the image

// Create an image with the specified width and height
$i = imagecreate($w, $h);

// Allocate a background color (RGB: 200, 200, 200)
$bgcolor = imagecolorallocate($i, 200, 200, 200);

// Set the header to output an image in JPEG format
header("Content-Type: image/jpeg");

// Output the image as JPEG
imagejpeg($i);

// Free up memory
imagedestroy($i);

?>