<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */
/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/*
date_default_timezone_set('America/Sao_Paulo');
  $t = date("H");
  echo $t;

  if($t < 12) {
    echo 'Good Morning!';
  } elseif($t < 17 ) {
    echo 'Good Afternoon';
  } else {
    echo 'Good Evening';
  };
*/

// operador ternário

// $firstPost = !empty($sports) ? $sports[0] : 'No Posts';

// echo $firstPost;

$favcolor = 'white';

switch($favcolor) {
  case 'red' :
    echo 'Your favorite color is red';
    break; 
  case 'blue' :
    echo 'Your favorite color is blue';
    break;
  case 'green' :
    echo 'Your favorite color is green';
    break;
    default:
    echo 'Your favorite color is not red, blue, green';
};