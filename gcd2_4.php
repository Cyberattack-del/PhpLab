<?php
$p = $x = 20;
$q = $y = 25;
while($x != $y){
if($x > $y){
$x = $x - $y;
}
else{
$y = $y - $x;
}
}
echo "The GCD of $p and $q is: $x";
 ?>