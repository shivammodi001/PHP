<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call PHP Function</title>
</head>
<body>
    <form method="GET" action="">
        <button type="submit" name="btn">Call PHP Function</button>
    </form>

    

</body>
</html>
<?php
    // Check if the button was clicked via GET method
    if (isset($_REQUEST['btn'])) {
        myFunction();
    }

    function myFunction() {
        echo "<h1>PHP Function Called!</h1>";
    }
?>