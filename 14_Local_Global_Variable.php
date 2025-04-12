<?php
    //Local Variable ->
    // A variable declared inside a function is called a local variable. 
    // It can only be accessed within that function.
    $local_var = "Hello, World!";
    function localFunction() {
        $local_var = "Hello, Local!";
        echo $local_var; // This will output "Hello, Local!"
    }
    localFunction(); // Call the function to see the local variable in action
    echo "<br>";
    echo $local_var; // This will output "Hello, World!" because $local_var is a local variable in the function
    echo "<br>";

    //Global Variable ->
    // use global keyword to access global variable inside function.
    // A variable declared outside of any function is called a global variable.
    // It can be accessed from anywhere in the script, including inside functions.
    $global_var = "Hello, Global!";
    function globalFunction() {
        global $global_var; // Use the global keyword to access the global variable
        echo $global_var; // This will output "Hello, Global!"
    }
    globalFunction(); // Call the function to see the global variable in action
    echo "<br>";
    echo $global_var; // This will also output "Hello, Global!" because $global_var is a global variable
    echo "<br>";

?>