<?php

// Path to your directory
$path = "C:/xampp/htdocs/PHP_Practice/21_File_handling/";

// Get the list of files in the directory
$files = scandir($path);

// Print raw file list
print_r($files);
echo "<br><br>";

// Remove '.' and '..' from the list
$files = array_diff($files, array('.', '..'));

// Print filtered file list
print_r($files);
echo "<br><br>";

// Display clickable links for each file
foreach ($files as $file) {
    // Use href with relative path (recommended for browser access)
    echo "File name: <a href=\"21_File_handling/$file\" target=\"_blank\">$file</a><br>";
} 
?>
