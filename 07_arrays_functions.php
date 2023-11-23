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

print_r($fruits);