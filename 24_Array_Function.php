<?php
    // Handle array functions in PHP

    $user = ["shivam", "raj", "kumar", "sharma"];

    //1. is_array() - Check if a variable is an array
    if(is_array($user)){
        echo "<h2>is_array()</h2>"; 
        echo "<pre>True</pre>";
    }else{
        echo "<h2>is_array()</h2>";
        echo "<pre>False</pre>";
    }
    echo "<br>";

    //2. count() - Count the number of elements in an array
    echo "<h2>count()</h2>";
    echo "<pre>".count($user)."</pre>"; // 4
    echo "<br>";

    //3. unset() - Remove an element from an array from a specific index
    unset($user[2]); // Remove element at index 2
    echo "<h2>unset()</h2>";
    print_r($user); // ["shivam", "raj", "sharma"] // index 2 is removed
    echo "<br>";

    //4. array_push() - Add one or more elements to the end of an array
    array_push($user, "kumar"); // Add "kumar" to the end of the array
    echo "<h2>array_push()</h2>";
    print_r($user); // ["shivam", "raj", "sharma", "kumar"]
    echo "<br>";

    //5. array_keys() - Get all the keys of an array
    $user = ["name"=>"shivam", "age"=>22, "city"=>"Delhi", "country"=>"India"];
    echo "<h2>array_keys()</h2>";
    print_r(array_keys($user)); // ["name", "age", "city", "country"]
    echo "<br>";

    //6. array_values() - Get all the values of an array
    echo "<h2>array_values()</h2>";
    print_r(array_values($user)); // ["shivam", 22, "Delhi", "India"]
    echo "<br>";

    //7. implode() - Join array elements with a string
    $user = ["shivam", "raj", "kumar", "sharma"];
    echo "<h2>implode()</h2>";
    echo "<pre>".implode(", ", $user)."</pre>"; // "shivam, raj, kumar, sharma"
    echo "<br>";

    //8. explode() - Split a string into an array
    $str = "shivam,raj,kumar,sharma";
    echo "<h2>explode()</h2>";
    print_r(explode(",", $str)); // ["shivam", "raj", "kumar", "sharma"]
    echo "<br>";

    //9. array_merge() - Merge two or more arrays
    $arr1 = ["a", "b", "c"];
    $arr2 = ["d", "e", "f"];
    echo "<h2>array_merge()</h2>";
    print_r(array_merge($arr1, $arr2)); // ["a", "b", "c", "d", "e", "f"]
    echo "<br>";

    //10. array_unique() - Remove duplicate values from an array
    $arr = ["a", "b", "c", "a", "b", "c"];
    echo "<h2>array_unique()</h2>";
    print_r(array_unique($arr)); // ["a", "b", "c"]
    echo "<br>";
?>