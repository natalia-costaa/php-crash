<?php
/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/
function registerUser() {
    $x = 10;
    echo 'User registered';
}

registerUser();

//Adding params
function sum($n1,$n2) {
    return $n1 + $n2;
}
echo sum(1, 3);

//Adding params
function subtract($n1=6,$n2 = 3) {
    return $n1 - $n2;
}
echo subtract();

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($n1, $n2) {
    return $n1 + $n2;
};
echo $add(5,5);

// Arrow functions
$multiply = fn($n1 = 2, $n2 = 3) => $n1 * $n2;

echo $multiply();

