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
$arr4 = [...$arr1, ...$arr2];
$space = '<br>';
echo $space;
print_r($arr3);
 

$a = ['green','red', 'yellow'];
$b = ['avocado','apple', 'banana'];

$c = array_combine($a, $b);
$keys = array_keys($c);
echo $space;
print_r($keys);

$flipped = array_flip($c);
echo $space;
print_r($flipped);

$numbers = range(1,20);

//function numero($n) {
//   return "Number ${n}";
//} 
//$newNumbers = array_map('numero', $numbers);
$newNumbers = array_map(function($n) {
    return "Number ${n}";
}, $numbers);

//print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($n) => $n <= 10);
print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $n) =>
$carry + $n);

print_r($sum);