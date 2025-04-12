<?php

    // types of data 
    // 1. String
    // 2. Integer
    // 3. Float
    // 4. Boolean
    // 5. Array
    // 6. Object
    // 7. Null
    // 8. Resource
    // 9. Closure
    // 10. Date
    

    // String
    $name = "shivam modi";
    echo var_dump($name); // it will use for check the type of data and value of data and length of data
    echo gettype($name); // it will use for check the type of data only 

    // Integer
    $age = 20;
    echo var_dump($age);
    echo gettype($age);

    // Float
    $height = 5.5;
    echo var_dump($height);
    echo gettype($height);

    // Boolean
    $isStudent = true;
    echo var_dump($isStudent);
    
    // Array
    $colors = array("red", "green", "blue");
    echo var_dump($colors);

    // Object
    $person = new stdClass();
    $person->name = "shivam";
    $person->age = 20;
    echo var_dump($person);
    echo gettype($person);


    // Null
    $null = null;
    echo var_dump($null);

    // Resource
    $file = fopen("file.txt", "r");

    // Closure
    $add = function($a, $b) {
        return $a + $b;
    };  
    echo var_dump($add(10, 20));


    // Date
    $date = new DateTime('2022-01-01'); 


    // appche will help php to run the code 
    // it will run the code in the server side
    // php first will check the code is correct or not
    // if the code is correct then it will run the code in the server side
    // and it will give the output to the user

?>