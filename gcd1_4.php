<?php
$x = 50;
$y = 100;
if($x > $y)
{
$temp = $x;
$x = $y;
$y = $temp;
}
for($i = 1; $i -($x + 1); $i++){
if($x % $i == 0 & $y % $i == 0)
{
$gcd = $i;
}
}
echo " The GCD of $x and $y is :$gcd";
 ?>