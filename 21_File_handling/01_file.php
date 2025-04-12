<?php
// File handling in PHP
// File handling is a way to read and write files in PHP.
// PHP provides several functions to handle files, including opening, reading, writing, and closing files.
// The most common functions used for file handling are fopen(), fread(), fwrite(), fclose(), and file_get_contents().


// 1. fopen() - Opens a file or URL
// Syntax: fopen(filename, mode)
// Modes:
// 'r' - Read only. Starts at the beginning of the file
// 'r+' - Read/Write. Starts at the beginning of the file
// 'w' - Write only. Opens and clears the file or creates a new file if it doesn't exist
// 'w+' - Read/Write. Opens and clears the file or creates a new file if it doesn't exist
// 'a' - Append. Opens and writes to the end of the file or creates a new file if it doesn't exist
// 'a+' - Read/Append. Opens and writes to the end of the file or creates


$file = fopen("test.txt", "w+"); // Open the file in write mode
if ($file === false) {
    die("Error opening the file.");
}
// 2. fwrite() - Writes data to a file
fwrite($file, "Hello, World!\n"); // Write to the file
fwrite($file, "This is a test file.\n"); // Write to the file
fclose($file); // Close the file

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$file2 = fopen("test.txt", "r"); // Open the file in read mode
if($file2){
    // 3. fread() - Reads data from a file
    $content = fread($file2, filesize("test.txt")); // Read the file content
    echo $content; // Display the content
    fclose($file2); // Close the file
} else {
    die("Error opening the file.");

}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(file_exists("example.txt")){
    unlink("example.txt");////delete the file
    echo "File deleted.";
}
else{
    echo "File Doesn't Exist";
}

?>