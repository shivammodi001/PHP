<form method="POST" action="">
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    <button name="button" value="set">Set Cookies</button>
    <br>
    <button name="button" value="get">Display Cookies</button>
    <br>
    <button name="button" value="delete">Delete Cookies</button>
    <br>
</form>

<?php 
if(isset($_POST['button'])){
    if($_POST['button'] == 'set'){
        $value1 = $_POST['name'];
        setcookie('name', $value1, time() + 3600, '/');
        $value2 = $_POST['age'];
        setcookie('Age', $value2, time() + 3600, '/');
        echo "Cookies set successfully<br>";
    }

    if($_POST['button'] == 'get'){
        if(isset($_COOKIE['name'])) {
            echo "Cookie Name: ".$_COOKIE['name']."<br>";
            // echo "Cookie Age: ".$_COOKIE['Age']."<br>";
        } else {
            echo "Cookies not set<br>";
        }
    }

    if($_POST['button'] == 'delete'){
        setcookie('name', '', time() - 3600, '/');
        setcookie('Age', '', time() - 3600, '/');
        echo "Cookies deleted successfully<br>";
    }
}
?>
