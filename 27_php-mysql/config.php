<?php
$host = 'localhost'; // Database host
$username = 'root'; // Database username
$password = ''; // Database password
$database = 'college'; // Database name

// Connect to the database
$connection = mysqli_connect($host, $username, $password, $database);

// Fix: Check connection properly
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected Successfully<br>";
}

// Fix: Selecting DB is unnecessary since it's already selected in mysqli_connect,
// but if you want to keep it, you should still fix the logic:
if (!mysqli_select_db($connection, $database)) {
    die("Database selection failed: " . mysqli_error($connection));
} else {
    echo "Database selected successfully<br>";
}

// Getting data from POST
$name = $_POST['name'] ;
$course = $_POST['course'];
$batch = $_POST['batch'];
$city = $_POST['city'];
$year = $_POST['year'];

// You might want to check if all fields are filled (optional)
if (empty($name) || empty($course) || empty($batch) || empty($city) || empty($year)) {
    die("Please fill in all the fields. Nothing is inserted.");

}

// SQL query
$sql = "INSERT INTO students (name, course, batch, city, year) 
        VALUES ('$name', '$course', '$batch', '$city', '$year')";

// Run the query
if (mysqli_query($connection, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($connection);
}

// Close the connection (optional but recommended)
mysqli_close($connection);
?>
