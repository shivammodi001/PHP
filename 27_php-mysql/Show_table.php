<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'college';

// Connect to database
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch data
$sql = "SELECT * FROM students";
$result = mysqli_query($connection, $sql);

// Check if there are rows
if (mysqli_num_rows($result) > 0) {
    echo "<h2>Student List</h2>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Batch</th>
            <th>City</th>
            <th>Year</th>
          </tr>";

    // Output each row
    // mysqli_fetch_assoc() fetches a result row as an associative array
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['course']}</td>
                <td>{$row['batch']}</td>
                <td>{$row['city']}</td>
                <td>{$row['year']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No students found.";
}

// Close connection
mysqli_close($connection);
?>
