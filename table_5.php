<?php
$rows = 10;
$columns = 10;
echo "<table border='1'>";
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $columns; $j++) {
        echo "<td>" . ($i * $j)."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>