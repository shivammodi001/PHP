<?php
    //Handle json data in PHP

    //JSON: JavaScript Object Notation
    // It is a text-based data exchange format for structing data
    // It is mainly used for data exchange between server and client
    // It is language independent and can be used in any programming language

    $data = ["name"=>"shivam", "age"=>22, "city"=>"Delhi", "country"=>"India"];
    // Convert PHP array to JSON string
    $json_data = json_encode($data);
    // Display JSON string
    echo "<h2>JSON Data:</h2>";
    echo "<pre>$json_data</pre>";
    //output:  {"name":"shivam","age":22,"city":"Delhi","country":"India"}

    // Convert JSON string to PHP array
    $json_string = '{"name":"shivam","age":22,"city":"Delhi","country":"India"}';
    $php_array = json_decode($json_string, true); // true to convert to associative array
    // Display PHP array
    echo "<h2>PHP Array:</h2>";
    print_r($php_array)."<br>";

?>