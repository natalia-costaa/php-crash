<?php
/* ------------ For Loop ------------ 

for($x = 0; $x <= 10; $x++) {
    echo 'Number ' . $x . '<br>';
}
*/

/* ------------ While Loop ------------ 
$x = 1;

while($x <= 15) {
    echo 'Number ' . $x . '<br>';
    $x = $x + 1;
}
*/

/*
** Do While Loop Syntax
$x = 1;

do {
    echo "Number:" . $x . "<br>";
    $x++;
  } while ($x <= 5);
*/
$posts = ['First', 'Second', 'Third'];

foreach($posts as $index => $post) {
    echo $index + 1 . ' - '. $post . '<br>';
}
// Use the keys within the loop for an associative array
$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
  ];
  
  // Get Keys
  foreach ($person as $key => $val) {
    echo "${key} - ${val} <br>";
  }