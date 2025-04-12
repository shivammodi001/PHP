<?php
    // GET method:
    // 1. Request is visible in the URL.
    // 2. Data is sent in the URL as query string.
    // 3. Less secure than POST method.
    // 4. Can send small amount of data.
    
    echo "<h1>GET method</h1>";
    echo $_GET['user_name'] . "<br>";
    echo $_GET['user_email'] . "<br>";
    echo $_GET['user_age'] . "<br>";
    echo $_GET['user_phone'] . "<br>";


    // http://localhost/PHP_Practice/16_form_php/get.php?user_name=shivam&user_email=smodi%40gmail.com&user_age=21&user_phone=111111
?>
