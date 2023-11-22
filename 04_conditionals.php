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
    $age = 20;

    if($age >= 18) {
        echo 'You are old enough to vote';
    } else {
        echo 'Sorry, you are not old enough to vote';
    };
  */

  echo date_default_timezone_get();

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
