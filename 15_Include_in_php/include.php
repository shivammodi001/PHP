<?php
include 'test.php'; // Include the test.php file
// This will include the contents of test.php here  
//if the file is not found, it will produce a warning but the script will continue executing.

include_once 'test.php'; // Include the test.php file only once
// This will include the contents of test.php here only once, even if it's called multiple times.

require 'test.php'; // Require the test.php file
// This will include the contents of test.php here and will produce a fatal error if the file is not found.

require_once 'test.php'; // Require the test.php file only once
// This will include the contents of test.php here only once, even if it's called multiple times.

?>  