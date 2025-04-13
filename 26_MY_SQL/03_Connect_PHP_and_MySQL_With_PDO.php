<?php
    // Connect to MySQL database using PDO
    // PDO (PHP Data Objects) is a database access layer providing a uniform method of access to multiple databases.
    // It does not provide a database abstraction but allows for a uniform method of access.

    $host='localhost'; // Host name
    $user='root'; // User name
    $password=''; // Password
    $db_name='college'; // Database name

    try{
        $connection = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully to the database<br>";

    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
   echo "<br>";
   $result = $connection->query("show tables");
   while ($a <= 10) {
    # code...
    $row = $result->fetch(PDO::FETCH_ASSOC);
    echo $row['Tables_in_college'] . "<br>";
    $a++;
    
   }
?>