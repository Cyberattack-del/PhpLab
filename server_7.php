<?php
$url = 'https://media.geeksforgeeks.org/wp-content/uploads/gfg-40.png';
$dir = 'C:/wamp64/www/Harish/';
if (!is_dir($dir)) {
mkdir($dir, 0777, true); 
}
$file_name = basename($url);
$save_file_loc = $dir . $file_name;
$ch = curl_init($url);
$fp = fopen($save_file_loc, 'wb');
if ($fp === false) {
die("Error: Unable to open file for writing");
}
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
$result = curl_exec($ch);
if ($result === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    echo "File downloaded successfully to: $save_file_loc";
}
curl_close($ch);
fclose($fp);
?>