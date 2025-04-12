<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Create an array of data
                $data = [
                    ['id' => 1, 'name' => 'John', 'age' => 25],
                    ['id' => 2, 'name' => 'Jane', 'age' => 30],
                    ['id' => 3, 'name' => 'Doe', 'age' => 22],
                ];
                
                // Loop through the array and create table rows
                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['age']}</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>    
        


    </table>
</body>
</html>

