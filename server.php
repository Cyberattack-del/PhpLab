<?php
$localFile = 'C:/Users/HARISH/Desktop/Kerala.jpg';
$dir = 'C:/wamp64/www/Harish/';
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}
if (!file_exists($localFile)) {
    die("Error: Source file does not exist: $localFile");
}
if (!is_writable($dir)) {
    die("Error: Destination directory is not writable: $dir");
}
$file_name = basename($localFile); 
$save_file_loc = $dir . $file_name;
if (copy($localFile, $save_file_loc)) {
    echo "File downloaded successfully to: $save_file_loc";
} else {
    echo "Error: Could not copy the file.";
}
?>