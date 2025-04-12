<!-- <?php
    //session : 
    // session is a way to store information (in variables) to be used across multiple pages.
    // Unlike cookies, session data is stored on the server.
    //but cookies are stored on the client side.

    //session_start() function must be called before any output is sent to the browser.
    // session_start();
    
    // //set session variables
    // $_SESSION["username"] = "JohnDoe";  
    // $_SESSION["email"] = "johndoe@example.com";
    // $_SESSION["age"] = 25;
    // $_SESSION["isLoggedIn"] = true;
    // $_SESSION["cart"] = array("item1", "item2", "item3");



?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="username"><br><br>
        <button name="button" value="set">Set Session</button>
        <button name="button" value="display">Display Session</button>
        <button name="button" value="delete">Delete Session</button>

    </form>
    
</body>
</html>

<?php 
    session_start();
    if(isset($_POST['button'])){
        if($_POST['button'] == 'set'){
            $value = $_POST['username'];//input field value
            //set session variable
            $_SESSION['username'] = $value;
        }

        if($_POST['button'] == 'display'){
            //display session variable
            echo "Username: " . $_SESSION['username'] . "<br>";
        }

        if($_POST['button'] == 'delete'){
            //delete session variable
            unset($_SESSION['username']); // this will delete the session variable only not the session itself
            echo "Session variable deleted<br>";
            //destroy session
            session_destroy(); // destroy will delete all session variables
        }
    }
?>