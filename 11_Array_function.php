<?php
// Array Functions
$arr = array(1, 2, 3, 4, 5);
echo "Count: " . count($arr) . "\n"; // Count the number of elements in an array

echo "Max: " . max($arr) . "\n"; // Get the maximum value from an array

echo "Min: " . min($arr) . "\n"; // Get the minimum value from an array

echo "Sum: " . array_sum($arr) . "\n"; // Get the sum of all values in an array

echo "Product: " . array_product($arr) . "\n"; // Get the product of all values in an array


echo "Reverse: ";
print_r(array_reverse($arr)); // Reverse the order of elements in an array
echo "\n";


echo "Sort: ";
sort($arr); // Sort the array in ascending order
print_r($arr); // prints the array in a readable format
echo "\n";


echo "Sort Ascending: ";
sort($arr); // Sort the array in ascending order
print_r($arr); // prints the array in a readable format
echo "\n";


echo "Sort Descending: ";
rsort($arr); // Sort the array in descending order
print_r($arr); // prints the array in a readable format
echo "\n";

echo "Sort Associative: ";
$arr = array("a" => 3, "b" => 1, "c" => 2);
asort($arr); // Sort the array in ascending order, maintaining key association
print_r($arr); // prints the array in a readable format

echo "\n";
echo "Sort Associative Descending: ";
$arr = array("a" => 3, "b" => 1, "c" => 2);
arsort($arr); // Sort the array in descending order, maintaining key association
print_r($arr); // prints the array in a readable format
echo "\n";

echo "Sort by Key: ";
$arr = array("a" => 3, "b" => 1, "c" => 2);
ksort($arr); // Sort the array by key in ascending order
print_r($arr); // prints the array in a readable format
echo "\n";

echo "Sort by Key Descending: ";
$arr = array("a" => 3, "b" => 1, "c" => 2);
krsort($arr); // Sort the array by key in descending order
print_r($arr); // prints the array in a readable format 
echo "\n";



echo "Unique: ";
print_r(array_unique($arr)); // Remove duplicate values from an array
echo "\n";


echo "Slice: ";
print_r(array_slice($arr, 1, 3)); // Get a slice of the array (from index 1 to index 3)
echo "\n";

echo "Splice: ";
$arr = array(1, 2, 3, 4, 5);
array_splice($arr, 2, 2); // Remove 2 elements from index 2
print_r($arr); // prints the array in a readable format

echo "\n";
echo "Push: ";
$arr = array(1, 2, 3, 4, 5);
array_push($arr, 6); // Add an element to the end of the array
print_r($arr); // prints the array in a readable format

echo "\n";
echo "Pop: ";
$arr = array(1, 2, 3, 4, 5);
array_pop($arr); // Remove the last element from the array
print_r($arr); // prints the array in a readable format

echo "\n";
echo "Shift: ";
$arr = array(1, 2, 3, 4, 5);    
array_shift($arr); // Remove the first element from the array
print_r($arr); // prints the array in a readable format
echo "\n";

echo "Unshift: ";
$arr = array(1, 2, 3, 4, 5);
array_unshift($arr, 0); // Add an element to the beginning of the array
print_r($arr); // prints the array in a readable format
echo "\n";

echo "Merge: ";
$arr1 = array(1, 2, 3);
$arr2 = array(4, 5, 6);
$arr3 = array_merge($arr1, $arr2); // Merge two arrays

print_r($arr3); // prints the array in a readable format
echo "\n";

echo "Explode: ";
$str = "Hello,World,How,Are,You";
$arr = explode(",", $str); // Split a string into an array using a delimiter
print_r($arr); // prints the array in a readable format
echo "\n";

echo "Implode: ";
$arr = array("Hello", "World", "How", "Are", "You");
$str = implode(",", $arr); // Join array elements into a string using a delimiter
echo $str; // prints the string
echo "\n";

echo "Array to String: ";
$arr = array("Hello", "World", "How", "Are", "You");
$str = join(",", $arr); // Join array elements into a string using a delimiter
echo $str; // prints the string
echo "\n";

echo "Array_column: ";
$arr = array(
    array("id" => 1, "name" => "John"),
    array("id" => 2, "name" => "Jane"),
    array("id" => 3, "name" => "Doe")
);
$names = array_column($arr, "name"); // Get values from a single column in a multi-dimensional array
print_r($names); // prints the array in a readable format
echo "\n";

echo "Array_keys: ";
$arr = array(
    "a" => 1,
    "b" => 2,
    "c" => 3
);
$keys = array_keys($arr); // Get all keys from an array
print_r($keys); // prints the array in a readable format
echo "\n";

echo "Array_values: ";
$arr = array(
    "a" => 1,
    "b" => 2,
    "c" => 3
);  
$values = array_values($arr); // Get all values from an array
print_r($values); // prints the array in a readable format
echo "\n";

echo "Array_flip: ";
$arr = array(
    "a" => 1,
    "b" => 2,
    "c" => 3
);
$flipped = array_flip($arr); // Flip keys and values in an array
print_r($flipped); // prints the array in a readable format
echo "\n";


echo "Array_diff: ";
$arr1 = array(1, 2, 3, 4, 5);
$arr2 = array(4, 5, 6, 7, 8);
$diff = array_diff($arr1, $arr2); // Get values in the first array that are not in the second array
print_r($diff); // prints the array in a readable format
echo "\n";

echo "Array_intersect: ";
$arr1 = array(1, 2, 3, 4, 5);
$arr2 = array(4, 5, 6, 7, 8);
$intersect = array_intersect($arr1, $arr2); // Get values that are present in both arrays
print_r($intersect); // prints the array in a readable format
echo "\n";

echo "Array_merge_recursive: ";
$arr1 = array("a" => array(1, 2), "b" => array(3, 4));
$arr2 = array("a" => array(5, 6), "b" => array(7, 8));
$arr3 = array_merge_recursive($arr1, $arr2); // Merge two arrays recursively
print_r($arr3); // prints the array in a readable format
echo "\n";


?>