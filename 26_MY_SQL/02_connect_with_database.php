<?php
    // Connect to MySQL database using mysqli
    // fo cnnectiong to the databse we need to use the following code
    $host='localhost'; // Host name
    $username='root'; // Mysql username
    $password=''; // Mysql password
    $db_name='college'; // Database name

    $connection = new mysqli($host, $username, $password, $db_name);
    // Check connection
    if($connection -> connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully to the database<br>";
    }
?>