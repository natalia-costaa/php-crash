<?php

function inverse($x) {
    if(!$x) { // verifica se o valor é falso ou zero
        throw new Exception('Division by zero');
    }
    return 1/$x;

} 

try {
    echo inverse(5);
    echo inverse(0);
} catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
}