<?php
    //Type Casting
    //Type casting is the process of converting a variable from one data type to another.
    //In PHP, you can use type casting to convert a variable to a different data type.
    //You can use the following type casting operators:
    //(int) - Convert to integer
    //(float) - Convert to float
    //(string) - Convert to string
    //(array) - Convert to array
    //(object) - Convert to object
    //(bool) - Convert to boolean
    //(unset) - Convert to unset // now this is not used in PHP 8.0 and above

    //Example:
    $var = "10.5"; // string
    echo "Original variable: $var\n"; // prints the string
    echo "Type: " . gettype($var) . "\n"; // prints the type of variable
    
    echo "Type casting to int: " . (int)$var . "\n"; // prints the integer value
    echo "Type: " . gettype((int)$var) . "\n"; // prints the type of variable
    
    echo "Type casting to float: " . (float)$var . "\n"; // prints the float value
    echo "Type: " . gettype((float)$var) . "\n"; // prints the type of variable
    
    echo "Type casting to string: " . (string)$var . "\n"; // prints the string value
    echo "Type: " . gettype((string)$var) . "\n"; // prints the type of variable
    
    echo "Type casting to array: ";
    $arr = (array)$var; // convert to array
    print_r($arr); // prints the array in a readable format
    echo "Type: " . gettype($arr) . "\n"; // prints the type of variable
    
    echo "Type casting to object: ";
    $obj = (object)$var; // convert to object
    print_r($obj); // prints the object in a readable format
    echo "Type: " . gettype($obj) . "\n"; // prints the type of variable
    
    echo "Type casting to boolean: " . (bool)$var . "\n"; // prints the boolean value
    echo "Type: " . gettype((bool)$var) . "\n"; // prints the type of variable
    
?>