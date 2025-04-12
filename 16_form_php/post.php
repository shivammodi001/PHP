<?php
    //Post method:
    // 1. Request is not visible in the URL.
    // 2. Data is sent in the body of the request.
    // 3. More secure than GET method.
    // 4. Can send large amount of data.
    // 5. Can send binary data.
    // 6. Can send files.
    // 7. Can send data in different formats (JSON, XML, etc.).

    echo "<h1>POST method</h1>";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<h2>Form submitted successfully</h2>";
        echo "<h2>Form data:</h2>";
        echo $_POST['user_name'] . "<br>";
        echo $_POST['user_email'] . "<br>";
        echo $_POST['user_age'] . "<br>";
        echo $_POST['user_phone'] . "<br>";
    } else {
        echo "<h2>Form not submitted</h2>";
    }
    
?>
