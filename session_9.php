<?php
session_start();
?>
<html>
<head>
    <title>Sessions</title>
</head>
<body bgcolor="Lavender">
<font size="4" face="Arial">
<h2>Tracking Visitors with Sessions</h2>
<?php
if (!isset($_SESSION['visitor_count'])) 
{
$_SESSION['visitor_count'] = 0; 
}
else
{
$_SESSION['visitor_count']++; 
}
echo "You are visitor number " . $_SESSION['visitor_count'] . ".<br/>";
echo "The session ID: " . session_id();
?>
</font>
</body>
</html>