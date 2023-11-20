<?php
// --------- PHP Data Types --------- */
//
//- String - A string is a series of characters surrounded by quotes
    $name = "Brad";

//- Integer - Whole numbers
    $age = 40;

//- Float - Decimal numbers
    $cash_on_hands = 20.75;

//- Boolean - true or false
    $hasKids = true; // em ECHO ele imprime 1 quando true e não imprime nada quando false

//- Array - An array is a special variable, which can hold more than one value
//- Object - A class
//- NULL - Empty variable
//- Resource - A special variable that holds a resource

echo $name . " is" . $age . "years old";
echo "$name is $age years old";
echo "${name} is ${age} years old";

echo 5 + 5;
echo '5' + '5';
echo 10 - 5;
echo 5 * 6;
echo 10 / 2;
echo 10 % 3;

define('HOST', 'localhost');

echo HOST;


/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/