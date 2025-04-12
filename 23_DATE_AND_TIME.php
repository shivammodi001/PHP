<?php
    // Handle date and time in PHP

    date_default_timezone_set("Asia/Kolkata"); // Set default timezone to Asia/Kolkata
    // Display current date and time

    $data = date("Y-m-d H:i:s"); // Current date and time
    // Display current date and time
    echo "<h2>Current Date and Time:</h2>";
    echo "<pre>$data</pre>";
    //output: 2023-10-05 12:34:56 (example output)

///////////////////////////////////////////////////////////////////////////////////////////////////////
    echo date('d'); // 2 digit day of the month
    echo "<br>";
    echo date('m'); // 2 digit month
    echo "<br>";
    echo date('Y'); // 4 digit year
    echo "<br>";
    echo date('H'); // 24 hours format
    echo "<br>";
    echo date('i'); // minutes
    echo "<br>";
    echo date('s'); // seconds
    echo "<br>";
    echo date('a'); // am/pm
    echo "<br>";
    echo date('A'); // AM/PM
    echo "<br>";
    echo date('l'); // Day of the weeks
    echo "<br>";
    echo date('F'); // Month name
    echo "<br>";
    echo date('M'); // Month name short form
    echo "<br>";
    echo date('D'); // Day name short form
    echo "<br>";
    echo date('z'); // Day of the year
    echo "<br>";
    echo date('W'); // Week number of the year
    echo "<br>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<form action="" method="post">
    <button type="submit" name="button" value="Date">Show current date and time</button>
</form>
<?php
    if(isset($_POST['button']) == "Date"){
        echo date('d-m-Y H:i:s'); // 2 digit day of the month - 2 digit month - 4 digit year - 24 hours format - minutes - seconds
        echo "<br>";
    }
?>