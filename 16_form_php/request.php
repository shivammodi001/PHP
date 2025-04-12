<?php
    //$_REQUEST : 
    // 1. It is a superglobal variable in PHP.
    // 2. It is used to collect data after submitting an HTML form.
    // 3. It can collect data sent in both GET and POST methods.

    echo "<h1>REQUEST method</h1>";
    echo $_REQUEST['user_name'] . "<br>";
    echo $_REQUEST['user_email'] . "<br>";
    echo $_REQUEST['user_age'] . "<br>";
    echo $_REQUEST['user_phone'] . "<br>";
?>