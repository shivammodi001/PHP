<?php 
    // Array : it is collection of items which can be of any data type
    $arr = array(1, 2, 3, 4, 5);
    print_r($arr); // prints the array in a readable format 
    echo "\n";
    
    //taking input from user

    $n=(int)readline("enter size: ");
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        $arr[] = (int)readline("enter element $i: ");
    }
    print_r($arr); // prints the array in a readable format


    // Associative Array : it is an array which has key value pair
    $arr = array("name" => "John", "age" => 25, "city" => "New York");
    print_r($arr); // prints the array in a readable format
    echo "\n";

    //taking input from user
    $n=(int)readline("enter size: ");
    $arr = [];
    for ($i = 0; $i < $n; $i++) {

        $key = readline("enter key $i: ");
        $value = readline("enter value $i: ");
        $arr[$key] = $value;
    }
    print_r($arr); // prints the array in a readable format

    echo "\n";

    // Multidimensional Array : it is an array which has array as its element
    $arr = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    print_r($arr); // prints the array in a readable format

    echo "\n";
    //taking input from user
    $n=(int)readline("enter size: ");
    $arr = [];
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            $arr[$i][$j] = (int)readline("enter element $i $j: ");
        }
    }
    print_r($arr); // prints the array in a readable format
    echo "\n";


     
    


?>