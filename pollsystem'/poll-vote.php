<?php
$filename = "poll-results.txt";

// Check if the file exists; if not, create one with default values
if (!file_exists($filename)) {
    file_put_contents($filename, "0\n0");
}

// Read file content
$content = file($filename, FILE_IGNORE_NEW_LINES);
$yes = (int)$content[0];
$no = (int)$content[1];

// Get vote from request
if (isset($_GET['vote'])) {
    $vote = (int)$_GET['vote'];

    if ($vote == 0) {
        $yes++;
    } elseif ($vote == 1) {
        $no++;
    }

    // Update file
    file_put_contents($filename, "$yes\n$no");
}

// Calculate percentages
$totalVotes = $yes + $no;
$yesPercent = $totalVotes ? round(($yes / $totalVotes) * 100, 2) : 0;
$noPercent = $totalVotes ? round(($no / $totalVotes) * 100, 2) : 0;

echo "<h2>Results:</h2>";
echo "<table border='1'>";
echo "<tr><td>Yes:</td><td><img src='poll.gif' width='" . ($yesPercent * 2) . "px' height='20px'> $yesPercent%</td></tr>";
echo "<tr><td>No:</td><td><img src='poll.gif' width='" . ($noPercent * 2) . "px' height='20px'> $noPercent%</td></tr>";
echo "</table>";
?>