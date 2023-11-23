<?php
 
 $fruits = ['apple', 'orange', 'pear'];

 // Get length
 echo count($fruits);

// Search array 
var_dump(in_array('apple', $fruits));

// Add in array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');

// Remove in array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);

// Split into 2 chunks
$chunked_array = array_chunk($fruits,3);

print_r($chunked_array);

// Concatenar arrays
$arr1 = [1,2,3];
$arr2 = [7,8,9];

$arr3 = array_merge($arr1, $arr2);

print_r($arr3);

