<?php
$two_months = 60 * 60 * 24 * 60 + time(); 
setcookie('Last_Visit', date("G:i - m/d/y"), $two_months);
if (isset($_COOKIE['Last_Visit']))
{
$last_visit = $_COOKIE['Last_Visit'];
echo "Your last visit was: " . $last_visit;
} 
else 
{
echo "This is your first visit!";
}
?>