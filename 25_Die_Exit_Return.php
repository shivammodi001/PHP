<?php
    //Die , Exit and Return in PHP

    //1. die() - Outputs a message and terminates the current script
    //2. exit() - Outputs a message and terminates the current script
        //die() and exit() same hi hain -> jab hume code ki execution rookni hoti hain

    //3. return - Returns a value from a function and terminates the function execution


    $a = 10;
    $b = 20;
    echo $a-$b; 
    echo "<br>";

    // exit("Exit function called"); // script execution will stop here
    // echo "This will not be printed"; // this will not be printed because exit() stops the script execution

    echo $a+$b;
    echo "<br>";

    return; // this will not stop the script execution, it will just return from the function if it is inside a function
    // if it is outside a function, it will just stop the script execution

    echo $a*$b;
    echo "<br>";
    // die("Die function called"); // script execution will stop here
    // this line will not be executed after die()

    echo $a/$b; 
    echo "<br>";
    
?>