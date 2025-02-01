<html>
<body>
<center>
<?php
$num = 5;
$factorial = 1;

// Calculate factorial
for ($x = $num; $x >= 1; $x--) {
    $factorial *= $x;
}

// Display result
echo "<font color='red'>Factorial of </font> $num <b>is</b> $factorial";
?>
</center>
</body>
</html>