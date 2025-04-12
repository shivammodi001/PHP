<?php

    $str = "shivam";
    // reverse the string
    $str = strrev($str);
    echo $str;// this will print "mavihs"

    // length of the string
    $length = strlen($str);
    echo $length;// this will print 6

    // convert to uppercase
    $str = strtoupper($str);
    echo $str;// this will print "MAMIVS"

    // convert to lowercase
    $str = strtolower($str);
    echo $str;// this will print "mamivs"

    // is_string
    $is_string = is_string($str);
    echo $is_string;// this will print 1

    // is_int()
    $is_int = is_int($str);
    echo $is_int;// this will print 0

    // substr
    $substr = substr($str, 2, 3);
    echo $substr;// this will print "amiv"

    // check if the string is empty
    if (empty($str)) {
        echo "The string is empty";
    }

    // matches
    $str = "shivam";
    $pattern = '/shiv/';
    if (preg_match($pattern, $str)) {
        echo "The string matches the pattern";
    }else{
        echo "The string does not match the pattern";
    }

    echo "\n";

    //date
    echo date("Y-m-d H:i:s"); // this will print the current date and time
    echo "\n";
    $date = date("Y-m-d");
    echo $date;// this will print the current date

    echo "\n";
    echo date("Y");
    echo "\n";
    echo date("m");
    echo "\n";
    echo date("d");
    
    echo "\n";


    // random value
    $random = rand(1, 100);
    echo $random;// this will print a random number between 1 and 100


    // die and exit
    // die() is used to terminate the script and display the message
    // exit() is used to terminate the script and return the status code
    echo "this will printed before die";
    die(); // exit();
    echo("This will not be printed because of die() after die");


?>
