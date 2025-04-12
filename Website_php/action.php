<?php
// print_r($_POST);
// echo "<br>";
if(isset($_POST['name'])){
    echo "user name is: ". $_POST['name'];
    echo "<br>";
    echo "user age is: ".$_POST['age'];
    echo "<br>";
    echo "user gmail: ". $_POST['gmail'];
    echo "<br>";
    echo "user skill is: ". implode(",", $_POST['skill']);
    echo "<br>";
    echo "user gender is: ".$_POST['gender'];
    echo "<br>";
    echo "user city is: ".$_POST['state'];
    echo "<br>";
}
?>